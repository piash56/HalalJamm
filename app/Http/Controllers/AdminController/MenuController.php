<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Menu::with('category');

        // Search functionality
        if ($request->has('search') && $request->search) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%")
                    ->orWhereHas('category', function ($categoryQuery) use ($search) {
                        $categoryQuery->where('name', 'like', "%{$search}%");
                    });
            });
        }

        $menus = $query->orderBy('sort_order', 'asc')->orderBy('created_at', 'desc')->paginate(10);
        $categories = Category::active()->orderBy('name', 'asc')->get();

        return view('admin.foods.listing', compact('menus', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::active()->orderBy('name', 'asc')->get();
        return view('admin.foods.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:menus,slug',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:active,inactive',
            'sort_order' => 'nullable|integer|min:0',
            'is_popular' => 'nullable|boolean'
        ]);

        $data = $request->all();
        $data['slug'] = $request->slug;
        $data['price'] = (float) $request->price;

        // Create menu first
        $menu = Menu::create($data);

        // Handle image upload after successful creation
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . Str::slug($request->slug) . '.' . $image->getClientOriginalExtension();

            // Store in Laravel's proper storage location
            Storage::disk('public')->putFileAs('menus', $image, $imageName);

            // Update menu with image name
            $menu->update(['image' => $imageName]);
        }

        return redirect()->route('admin.foods.index')->with('success', 'Food item created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        $categories = Category::active()->orderBy('name', 'asc')->get();
        return view('admin.foods.edit', compact('menu', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:menus,slug,' . $menu->id,
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'remove_current_image' => 'nullable|in:0,1',
            'status' => 'required|in:active,inactive',
            'sort_order' => 'nullable|integer|min:0',
            'is_popular' => 'nullable|boolean'
        ]);

        $data = $request->all();
        $data['price'] = (float) $request->price;

        // Handle remove current image request
        if ($request->has('remove_current_image') && $request->remove_current_image == '1') {
            // Delete old image if exists
            if ($menu->image) {
                Storage::disk('public')->delete('menus/' . $menu->image);
            }
            $data['image'] = null;
        }

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($menu->image) {
                Storage::disk('public')->delete('menus/' . $menu->image);
            }

            $image = $request->file('image');
            $imageName = time() . '_' . Str::slug($request->slug) . '.' . $image->getClientOriginalExtension();

            // Store in Laravel's proper storage location
            Storage::disk('public')->putFileAs('menus', $image, $imageName);

            $data['image'] = $imageName;
        }

        // Use provided slug
        $data['slug'] = $request->slug;

        // Remove the remove_current_image from data array to prevent database issues
        unset($data['remove_current_image']);

        $menu->update($data);

        return redirect()->route('admin.foods.index')->with('success', 'Food item updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        // Delete image if exists
        if ($menu->image) {
            Storage::disk('public')->delete('menus/' . $menu->image);
        }

        $menu->delete();

        return response()->json(['success' => true, 'message' => 'Food item deleted successfully!']);
    }
}
