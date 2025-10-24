<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Offer::with('category');

        // Search functionality
        if ($request->has('search') && $request->search) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%")
                    ->orWhere('food_name', 'like', "%{$search}%")
                    ->orWhereHas('category', function ($categoryQuery) use ($search) {
                        $categoryQuery->where('name', 'like', "%{$search}%");
                    });
            });
        }

        $offers = $query->orderBy('sort_order', 'asc')->orderBy('created_at', 'desc')->paginate(10);
        $categories = Category::active()->orderBy('name', 'asc')->get();

        return view('admin.offers.listing', compact('offers', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::active()->orderBy('name', 'asc')->get();
        return view('admin.offers.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'offer_type' => 'required|in:hot,discount',
            'discount_amount' => 'nullable|numeric|min:0|max:100',
            'food_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'food_name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'tag_1' => 'nullable|string|max:50',
            'tag_2' => 'nullable|string|max:50',
            'tag_3' => 'nullable|string|max:50',
            'is_active' => 'nullable|boolean',
            'sort_order' => 'nullable|integer|min:0'
        ]);

        $data = $request->all();
        $data['is_active'] = $request->has('is_active') ? true : false;

        // Create offer first
        $offer = Offer::create($data);

        // Handle image upload after successful creation
        if ($request->hasFile('food_image')) {
            $image = $request->file('food_image');
            $imageName = time() . '_' . Str::slug($request->name) . '.' . $image->getClientOriginalExtension();

            // Store in Laravel's proper storage location
            Storage::disk('public')->putFileAs('offers', $image, $imageName);

            // Update offer with image name
            $offer->update(['food_image' => $imageName]);
        }

        return redirect()->route('admin.offers.index')->with('success', 'Offer created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Offer $offer)
    {
        $categories = Category::active()->orderBy('name', 'asc')->get();
        return view('admin.offers.edit', compact('offer', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Offer $offer)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'offer_type' => 'required|in:hot,discount',
            'discount_amount' => 'nullable|numeric|min:0|max:100',
            'food_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'remove_current_image' => 'nullable|in:0,1',
            'food_name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'tag_1' => 'nullable|string|max:50',
            'tag_2' => 'nullable|string|max:50',
            'tag_3' => 'nullable|string|max:50',
            'is_active' => 'nullable|boolean',
            'sort_order' => 'nullable|integer|min:0'
        ]);

        $data = $request->all();
        $data['is_active'] = $request->has('is_active') ? true : false;

        // Handle remove current image request
        if ($request->has('remove_current_image') && $request->remove_current_image == '1') {
            // Delete old image if exists
            if ($offer->food_image) {
                Storage::disk('public')->delete('offers/' . $offer->food_image);
            }
            $data['food_image'] = null;
        }

        // Handle image upload
        if ($request->hasFile('food_image')) {
            // Delete old image if exists
            if ($offer->food_image) {
                Storage::disk('public')->delete('offers/' . $offer->food_image);
            }

            $image = $request->file('food_image');
            $imageName = time() . '_' . Str::slug($request->name) . '.' . $image->getClientOriginalExtension();

            // Store in Laravel's proper storage location
            Storage::disk('public')->putFileAs('offers', $image, $imageName);

            $data['food_image'] = $imageName;
        }

        // Remove the remove_current_image from data array to prevent database issues
        unset($data['remove_current_image']);

        $offer->update($data);

        return redirect()->route('admin.offers.index')->with('success', 'Offer updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Offer $offer)
    {
        // Delete image if exists
        if ($offer->food_image) {
            Storage::disk('public')->delete('offers/' . $offer->food_image);
        }

        $offer->delete();

        return response()->json(['success' => true, 'message' => 'Offer deleted successfully!']);
    }
}
