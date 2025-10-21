<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Addon;
use App\Models\Setting;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $request->validate([
            'food_id' => 'required|exists:menus,id',
            'quantity' => 'required|integer|min:1',
            'addons' => 'nullable|array',
            'addons.*' => 'exists:addons,id',
            'special_instructions' => 'nullable|string|max:500'
        ]);

        $food = Menu::findOrFail($request->food_id);

        // Get cart from session
        $cart = session()->get('cart', []);

        // Calculate price
        $itemPrice = $food->price;
        $selectedAddons = [];

        if ($request->addons) {
            $addons = Addon::whereIn('id', $request->addons)->get();
            foreach ($addons as $addon) {
                $itemPrice += $addon->price;
                $selectedAddons[] = [
                    'id' => $addon->id,
                    'name' => $addon->name,
                    'price' => $addon->price
                ];
            }
        }

        // Create cart item
        $cartItem = [
            'id' => uniqid(),
            'food_id' => $food->id,
            'name' => $food->name,
            'image' => $food->image_url,
            'price' => $food->price,
            'quantity' => $request->quantity,
            'addons' => $selectedAddons,
            'special_instructions' => $request->special_instructions,
            'subtotal' => $itemPrice * $request->quantity
        ];

        // Add to cart
        $cart[] = $cartItem;
        session()->put('cart', $cart);

        return response()->json([
            'success' => true,
            'message' => 'Item added to cart successfully!',
            'cart_count' => count($cart)
        ]);
    }

    public function getCartCount()
    {
        $cart = session()->get('cart', []);
        return response()->json(['count' => count($cart)]);
    }

    public function removeFromCart($itemId)
    {
        $cart = session()->get('cart', []);

        $cart = array_filter($cart, function ($item) use ($itemId) {
            return $item['id'] !== $itemId;
        });

        session()->put('cart', array_values($cart));

        return response()->json([
            'success' => true,
            'message' => 'Item removed from cart',
            'cart_count' => count($cart)
        ]);
    }

    public function updateQuantity(Request $request, $itemId)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1'
        ]);

        $cart = session()->get('cart', []);

        foreach ($cart as &$item) {
            if ($item['id'] === $itemId) {
                $item['quantity'] = $request->quantity;
                $itemPrice = $item['price'];

                // Add addon prices
                if (isset($item['addons']) && is_array($item['addons'])) {
                    foreach ($item['addons'] as $addon) {
                        $itemPrice += $addon['price'];
                    }
                }

                $item['subtotal'] = $itemPrice * $request->quantity;
                break;
            }
        }

        session()->put('cart', $cart);

        return response()->json([
            'success' => true,
            'cart_count' => count($cart)
        ]);
    }

    public function clearCart()
    {
        session()->forget('cart');

        return response()->json([
            'success' => true,
            'message' => 'Cart cleared successfully'
        ]);
    }
}
