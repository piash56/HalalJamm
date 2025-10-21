<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Category;
use App\Models\Setting;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function about()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.about', compact('bodyClass'));
    }

    public function allMenus(Request $request)
    {
        $bodyClass = 'page-wrapper';

        // Get all active categories for filter buttons
        $categories = Category::active()->orderBy('sort_order', 'asc')->get();

        // Get selected category from request
        $selectedCategory = $request->get('category');

        // Get foods with addons
        $foodsQuery = Menu::active()
            ->with(['category', 'addons' => function ($query) {
                $query->where('status', 'active');
            }])
            ->orderBy('sort_order', 'asc');

        // Filter by category if selected
        if ($selectedCategory && $selectedCategory !== 'all') {
            $foodsQuery->where('category_id', $selectedCategory);
        }

        $foods = $foodsQuery->get();

        // Get all "all_foods" addons
        $allFoodsAddons = \App\Models\Addon::active()->where('all_foods', true)->get();

        // Split foods into 3 columns for the layout
        $totalFoods = $foods->count();
        $itemsPerColumn = ceil($totalFoods / 3);

        $column1Foods = $foods->slice(0, $itemsPerColumn);
        $column2Foods = $foods->slice($itemsPerColumn, $itemsPerColumn);
        $column3Foods = $foods->slice($itemsPerColumn * 2);

        // Prepare foods data for JavaScript modal
        $foodsData = $foods->map(function ($menu) use ($allFoodsAddons) {
            // Get specific addons for this food
            $specificAddons = $menu->addons->map(function ($addon) {
                return [
                    'id' => $addon->id,
                    'name' => $addon->name,
                    'price' => (float) $addon->price,
                ];
            });

            // Get all-foods addons
            $allFoodsAddonsData = $allFoodsAddons->map(function ($addon) {
                return [
                    'id' => $addon->id,
                    'name' => $addon->name,
                    'price' => (float) $addon->price,
                ];
            });

            // Merge and remove duplicates
            $allAddons = $specificAddons->concat($allFoodsAddonsData)->unique('id')->values();

            return [
                'id' => $menu->id,
                'name' => $menu->name,
                'description' => $menu->description,
                'price' => (float) $menu->price,
                'image_url' => $menu->image_url,
                'category_id' => $menu->category_id,
                'addons' => $allAddons
            ];
        })->values();

        return view('frontend.pages.allMenus', compact('bodyClass', 'categories', 'selectedCategory', 'column1Foods', 'column2Foods', 'column3Foods', 'foodsData'));
    }

    public function cart()
    {
        $bodyClass = 'page-wrapper';
        $cartItems = session()->get('cart', []);

        // Calculate totals
        $subtotal = 0;
        foreach ($cartItems as $item) {
            $subtotal += $item['subtotal'];
        }

        // Get tax settings
        $taxEnabled = Setting::get('tax_enabled', false);
        $taxPercentage = Setting::get('tax_percentage', 10);

        $tax = 0;
        if ($taxEnabled && $taxPercentage > 0) {
            $tax = $subtotal * ($taxPercentage / 100);
        }

        $total = $subtotal + $tax;

        return view('frontend.pages.cart', compact('bodyClass', 'cartItems', 'subtotal', 'tax', 'total', 'taxEnabled', 'taxPercentage'));
    }

    public function checkout()
    {
        $bodyClass = 'page-wrapper';
        $cartItems = session()->get('cart', []);

        // Calculate totals
        $subtotal = 0;
        foreach ($cartItems as $item) {
            $subtotal += $item['subtotal'];
        }

        // Get tax settings
        $taxEnabled = Setting::get('tax_enabled', false);
        $taxPercentage = Setting::get('tax_percentage', 10);

        $tax = 0;
        if ($taxEnabled && $taxPercentage > 0) {
            $tax = $subtotal * ($taxPercentage / 100);
        }

        $total = $subtotal + $tax;

        // Generate time slots for today (NY timezone)
        $timeSlots = $this->generateTimeSlots();

        // Get current date in NY timezone for display
        $timezone = new \DateTimeZone('America/New_York');
        $currentDate = new \DateTime('now', $timezone);

        return view('frontend.pages.checkout', compact('bodyClass', 'cartItems', 'subtotal', 'tax', 'total', 'taxEnabled', 'taxPercentage', 'timeSlots', 'currentDate'));
    }

    public function processOrder(Request $request)
    {
        // Validate the request
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:500',
            'order_type' => 'required|in:in_store,delivery',
            'delivery_type' => 'required|in:asap,schedule',
            'payment_method' => 'required|in:cash_on_delivery',
            'order_notes' => 'nullable|string|max:1000',
            'scheduled_time' => 'required_if:delivery_type,schedule|nullable|date'
        ]);

        // Get cart items
        $cartItems = session()->get('cart', []);

        if (empty($cartItems)) {
            return redirect()->back()->with('error', 'Your cart is empty.');
        }

        // Calculate totals
        $subtotal = 0;
        foreach ($cartItems as $item) {
            $subtotal += $item['subtotal'];
        }

        // Get tax settings
        $taxEnabled = Setting::get('tax_enabled', false);
        $taxPercentage = Setting::get('tax_percentage', 10);

        $tax = 0;
        if ($taxEnabled && $taxPercentage > 0) {
            $tax = $subtotal * ($taxPercentage / 100);
        }

        $total = $subtotal + $tax;

        // Create timezone for New York
        $timezone = new \DateTimeZone('America/New_York');
        $orderedAt = new \DateTime('now', $timezone);

        // Handle scheduled time with proper timezone
        $scheduledTime = null;
        if ($request->scheduled_time) {
            // The scheduled time comes from time slots which are already in NY timezone
            // We need to ensure it's properly parsed and stored
            $scheduledTime = new \DateTime($request->scheduled_time, $timezone);
            $scheduledTime = $scheduledTime->format('Y-m-d H:i:s');
        }

        // Create order in database
        $orderNumber = 'ORD-' . time() . '-' . substr(md5(uniqid()), 0, 6);

        $order = Order::create([
            'order_number' => $orderNumber,
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'order_type' => $request->order_type,
            'delivery_type' => $request->delivery_type,
            'scheduled_time' => $scheduledTime ? new \DateTime($scheduledTime, new \DateTimeZone('America/New_York')) : null,
            'payment_method' => $request->payment_method,
            'order_notes' => $request->order_notes,
            'subtotal' => $subtotal,
            'tax' => $tax,
            'tax_percentage' => $taxPercentage,
            'tax_enabled' => $taxEnabled,
            'total' => $total,
            'status' => 'pending'
        ]);

        // Create order items
        foreach ($cartItems as $cartItem) {
            OrderItem::create([
                'order_id' => $order->id,
                'menu_id' => $cartItem['food_id'],
                'food_name' => $cartItem['name'],
                'food_image' => $cartItem['image'],
                'food_price' => $cartItem['price'],
                'quantity' => $cartItem['quantity'],
                'addons' => $cartItem['addons'],
                'special_instructions' => $cartItem['special_instructions'] ?? null,
                'item_total' => $cartItem['subtotal']
            ]);
        }

        // Store order data in session for success page display
        $orderData = [
            'id' => $order->id,
            'full_name' => $order->full_name,
            'email' => $order->email,
            'phone' => $order->phone,
            'address' => $order->address,
            'order_type' => $order->order_type,
            'delivery_type' => $order->delivery_type,
            'payment_method' => $order->payment_method,
            'order_notes' => $order->order_notes,
            'scheduled_time' => $order->scheduled_time ? $order->scheduled_time->format('Y-m-d H:i:s') : null,
            'cart_items' => $cartItems,
            'subtotal' => $order->subtotal,
            'tax' => $order->tax,
            'tax_percentage' => $order->tax_percentage,
            'tax_enabled' => $order->tax_enabled,
            'total' => $order->total,
            'order_number' => $order->order_number,
            'ordered_at' => $orderedAt->format('Y-m-d H:i:s'),
            'ordered_at_timezone' => 'America/New_York',
            'scheduled_time_timezone' => 'America/New_York'
        ];

        // Store order in session for success page
        session(['last_order' => $orderData]);

        // Clear the cart
        session()->forget('cart');

        // Redirect to success page
        return redirect()->route('order.success');
    }

    public function orderSuccess()
    {
        $bodyClass = 'page-wrapper';
        $orderData = session('last_order');

        // If no order data in session, redirect to home
        if (!$orderData) {
            return redirect()->route('home')->with('error', 'No recent order found.');
        }

        // Clear the order data from session after displaying
        session()->forget('last_order');

        return view('frontend.pages.order-success', compact('bodyClass', 'orderData'));
    }

    private function generateTimeSlots()
    {
        // Set timezone to New York
        $timezone = new \DateTimeZone('America/New_York');
        $now = new \DateTime('now', $timezone);

        // Start from current time, round up to next 15-minute interval, then add 15 minutes minimum
        $currentMinute = (int)$now->format('i');
        $currentHour = (int)$now->format('H');

        // Calculate next 15-minute slot
        $nextMinute = ceil($currentMinute / 15) * 15;
        if ($nextMinute >= 60) {
            $nextMinute = 0;
            $currentHour++;
        }

        // Add minimum 15 minutes (ASAP is 15 mins)
        $nextMinute += 15;
        if ($nextMinute >= 60) {
            $nextMinute = $nextMinute - 60;
            $currentHour++;
        }

        $startTime = new \DateTime('now', $timezone);
        $startTime->setTime($currentHour, $nextMinute, 0);

        // End of today (23:45 as last 15-minute slot)
        $endOfDay = new \DateTime('today', $timezone);
        $endOfDay->setTime(23, 45, 0);

        $slots = [];
        $slotTime = clone $startTime;

        while ($slotTime <= $endOfDay) {
            $slots[] = [
                'value' => $slotTime->format('Y-m-d H:i:s'),
                'display' => $slotTime->format('g:i A')
            ];
            $slotTime->add(new \DateInterval('PT15M'));
        }

        return $slots;
    }

    public function chef()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.chef', compact('bodyClass'));
    }

    public function chefDetails()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.chefDetails', compact('bodyClass'));
    }

    public function contact()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.contact', compact('bodyClass'));
    }

    public function faqs()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.faqs', compact('bodyClass'));
    }

    public function gallery()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.gallery', compact('bodyClass'));
    }

    public function history()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.history', compact('bodyClass'));
    }

    // Menu Details
    public function menuBurger()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.menuBurger', compact('bodyClass'));
    }

    public function menuChicken()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.menuChicken', compact('bodyClass'));
    }

    public function menuGrill()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.menuGrill', compact('bodyClass'));
    }

    public function menuPizza()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.menuPizza', compact('bodyClass'));
    }

    public function menuRestaurant()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.menuRestaurant', compact('bodyClass'));
    }

    public function menuSea()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.menuSea', compact('bodyClass'));
    }

    public function productDetails()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.productDetails', compact('bodyClass'));
    }


    public function shop()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.shop', compact('bodyClass'));
    }


    // Blog
    public function blog()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.blog', compact('bodyClass'));
    }

    public function blogDetails()
    {
        $bodyClass = 'page-wrapper';
        return view('frontend.pages.blogDetails', compact('bodyClass'));
    }
}
