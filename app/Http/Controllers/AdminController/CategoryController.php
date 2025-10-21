<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::with('menus')->orderBy('sort_order', 'asc')->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.categories.listing', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:categories,slug',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:active,inactive',
            'sort_order' => 'nullable|integer|min:0'
        ]);

        $data = $request->all();

        // Use provided slug
        $data['slug'] = $request->slug;

        // Create category first
        $category = Category::create($data);

        // Handle image upload after successful creation
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . Str::slug($request->slug) . '.' . $image->getClientOriginalExtension();

            // Use Storage facade for more reliable file handling
            $stored = Storage::disk('public')->putFileAs('categories', $image, $imageName);

            // Verify file actually exists
            $fullPath = storage_path('app/public/categories/' . $imageName);
            if (file_exists($fullPath)) {
                $category->update(['image' => $imageName]);
            }
        }

        return redirect()->route('admin.categories.index')->with('success', 'Category created successfully!');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:categories,slug,' . $category->id,
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'remove_current_image' => 'nullable|in:0,1',
            'status' => 'required|in:active,inactive',
            'sort_order' => 'nullable|integer|min:0'
        ]);

        $data = $request->all();

        // Handle remove current image request
        if ($request->has('remove_current_image') && $request->remove_current_image == '1') {
            // Delete old image if exists
            if ($category->image) {
                Storage::disk('public')->delete('categories/' . $category->image);
            }
            $data['image'] = null;
        }

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($category->image) {
                Storage::disk('public')->delete('categories/' . $category->image);
            }

            $image = $request->file('image');
            $imageName = time() . '_' . Str::slug($request->slug) . '.' . $image->getClientOriginalExtension();

            // Use Storage facade for more reliable file handling
            $stored = Storage::disk('public')->putFileAs('categories', $image, $imageName);

            // Verify file actually exists
            $fullPath = storage_path('app/public/categories/' . $imageName);
            if (file_exists($fullPath)) {
                $data['image'] = $imageName;
            }
        }

        // Use provided slug
        $data['slug'] = $request->slug;

        // Remove the remove_current_image from data array to prevent database issues
        unset($data['remove_current_image']);

        $category->update($data);

        return redirect()->route('admin.categories.index')->with('success', 'Category updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        // Delete image if exists
        if ($category->image) {
            Storage::disk('public')->delete('categories/' . $category->image);
        }

        $category->delete();

        return response()->json(['success' => true, 'message' => 'Category deleted successfully!']);
    }
}
