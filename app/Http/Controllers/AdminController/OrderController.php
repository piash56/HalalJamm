<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Menu;
use App\Models\Addon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $query = Order::with('orderItems')->orderBy('created_at', 'desc');

        // Filter by status if provided
        if ($request->has('status') && $request->status !== 'all') {
            $query->where('status', $request->status);
        }

        $orders = $query->paginate(10);

        // Calculate statistics for cards
        $totalOrders = Order::count();
        $pendingOrders = Order::where('status', 'pending')->count();
        $confirmedOrders = Order::where('status', 'confirmed')->count();
        $preparingOrders = Order::where('status', 'preparing')->count();
        $readyOrders = Order::where('status', 'ready_for_delivery')->count();
        $outForDelivery = Order::where('status', 'out_for_delivery')->count();
        $deliveredOrders = Order::where('status', 'delivered')->count();
        $cancelledOrders = Order::where('status', 'cancelled')->count();

        $currentStatus = $request->get('status', 'all');

        return view('admin.apps.orders', compact('orders', 'totalOrders', 'pendingOrders', 'confirmedOrders', 'preparingOrders', 'readyOrders', 'outForDelivery', 'deliveredOrders', 'cancelledOrders', 'currentStatus'));
    }

    public function show(Order $order)
    {
        $order->load('orderItems.menu');
        return view('admin.orders.view', compact('order'));
    }

    public function edit(Order $order)
    {
        $order->load('orderItems.menu');
        $menus = Menu::active()->with('addons')->get();
        $addons = Addon::where('status', 'active')->get();
        return view('admin.orders.edit', compact('order', 'menus', 'addons'));
    }

    public function update(Request $request, Order $order)
    {
        // Handle status-only updates from AJAX
        if ($request->ajax() && $request->has('status')) {
            $request->validate([
                'status' => 'required|in:pending,confirmed,preparing,ready_for_delivery,out_for_delivery,delivered,cancelled'
            ]);

            $order->update(['status' => $request->status]);
            return response()->json(['success' => true, 'message' => 'Order status updated successfully']);
        }

        // Handle full form updates
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:500',
            'order_type' => 'required|in:in_store,delivery',
            'delivery_type' => 'required|in:asap,schedule',
            'payment_method' => 'required|in:cash_on_delivery',
            'order_notes' => 'nullable|string|max:1000',
            'scheduled_time' => 'nullable|date',
            'status' => 'required|in:pending,confirmed,preparing,ready_for_delivery,out_for_delivery,delivered,cancelled'
        ]);

        DB::beginTransaction();
        try {
            // Update order details
            $order->update([
                'full_name' => $request->full_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'order_type' => $request->order_type,
                'delivery_type' => $request->delivery_type,
                'payment_method' => $request->payment_method,
                'order_notes' => $request->order_notes,
                'scheduled_time' => $request->scheduled_time ? new \DateTime($request->scheduled_time, new \DateTimeZone('America/New_York')) : null,
                'status' => $request->status
            ]);

            // Handle order items updates if provided
            if ($request->has('order_items')) {
                $this->updateOrderItems($order, $request->order_items);
            }

            DB::commit();
            return redirect()->route('admin.orders.index')->with('success', 'Order updated successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Failed to update order: ' . $e->getMessage());
        }
    }

    public function destroy(Order $order)
    {
        DB::beginTransaction();
        try {
            $order->orderItems()->delete();
            $order->delete();

            DB::commit();
            return response()->json(['success' => true, 'message' => 'Order deleted successfully']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['success' => false, 'message' => 'Failed to delete order']);
        }
    }

    private function updateOrderItems(Order $order, array $orderItemsData)
    {
        // Clear existing order items
        $order->orderItems()->delete();

        // Add new/updated order items
        foreach ($orderItemsData as $itemData) {
            $menu = Menu::find($itemData['menu_id']);
            if (!$menu) continue;

            $itemPrice = $menu->price;
            $addonsData = [];

            // Calculate addons if provided
            if (isset($itemData['addons']) && is_array($itemData['addons'])) {
                foreach ($itemData['addons'] as $addonId) {
                    $addon = Addon::find($addonId);
                    if ($addon) {
                        $itemPrice += $addon->price;
                        $addonsData[] = [
                            'id' => $addon->id,
                            'name' => $addon->name,
                            'price' => $addon->price
                        ];
                    }
                }
            }

            OrderItem::create([
                'order_id' => $order->id,
                'menu_id' => $menu->id,
                'food_name' => $menu->name,
                'food_image' => $menu->image_url,
                'food_price' => $menu->price,
                'quantity' => $itemData['quantity'] ?? 1,
                'addons' => $addonsData,
                'special_instructions' => $itemData['special_instructions'] ?? null,
                'item_total' => $itemPrice * ($itemData['quantity'] ?? 1)
            ]);
        }

        // Recalculate order totals
        $this->recalculateOrderTotal($order);
    }

    private function recalculateOrderTotal(Order $order)
    {
        $subtotal = $order->orderItems()->sum('item_total');
        $taxEnabled = \App\Models\Setting::get('tax_enabled', false);
        $taxPercentage = \App\Models\Setting::get('tax_percentage', 10);

        $tax = 0;
        if ($taxEnabled && $taxPercentage > 0) {
            $tax = $subtotal * ($taxPercentage / 100);
        }

        $total = $subtotal + $tax;

        $order->update([
            'subtotal' => $subtotal,
            'tax' => $tax,
            'tax_percentage' => $taxPercentage,
            'tax_enabled' => $taxEnabled,
            'total' => $total
        ]);
    }
}
