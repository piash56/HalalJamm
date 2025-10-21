<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Addon;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AddonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Addon::with('menus');

        // Search functionality
        if ($request->has('search') && $request->search) {
            $search = $request->search;
            $query->where('name', 'like', "%{$search}%");
        }

        $addons = $query->orderBy('sort_order', 'asc')->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.addons.listing', compact('addons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $foods = Menu::active()->orderBy('name', 'asc')->get();
        return view('admin.addons.add', compact('foods'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:addons,slug',
            'price' => 'nullable|numeric|min:0',
            'status' => 'required|in:active,inactive',
            'sort_order' => 'nullable|integer|min:0',
            'all_foods' => 'nullable|boolean',
            'food_ids' => 'array|min:1'
        ]);

        // Validate that either all_foods is checked OR at least one food is selected
        if (!$request->has('all_foods') && (!$request->has('food_ids') || empty(array_filter($request->food_ids)))) {
            return redirect()->back()->withErrors(['food_ids' => 'Please select at least one food or choose "All Foods".'])->withInput();
        }

        $data = $request->only(['name', 'slug', 'price', 'status', 'sort_order', 'all_foods']);
        $data['slug'] = $request->slug;
        $data['price'] = $request->price ? (float) $request->price : 0.00;
        $data['status'] = $request->status ?: 'active'; // Default to active
        $data['all_foods'] = $request->has('all_foods') ? true : false;

        // Create addon
        $addon = Addon::create($data);

        // Sync foods if not "all foods"
        if (!$data['all_foods'] && $request->has('food_ids')) {
            $foodIds = array_filter($request->food_ids);
            $addon->menus()->sync($foodIds);
        }

        return redirect()->route('admin.addons.index')->with('success', 'Addon created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Addon $addon)
    {
        $addon->load('menus');
        $foods = Menu::active()->orderBy('name', 'asc')->get();
        return view('admin.addons.edit', compact('addon', 'foods'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Addon $addon)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:addons,slug,' . $addon->id,
            'price' => 'nullable|numeric|min:0',
            'status' => 'required|in:active,inactive',
            'sort_order' => 'nullable|integer|min:0',
            'all_foods' => 'nullable|boolean',
            'food_ids' => 'array'
        ]);

        // Validate that either all_foods is checked OR at least one food is selected
        if (!$request->has('all_foods') && (!$request->has('food_ids') || empty(array_filter($request->food_ids)))) {
            return redirect()->back()->withErrors(['food_ids' => 'Please select at least one food or choose "All Foods".'])->withInput();
        }

        $data = $request->only(['name', 'slug', 'price', 'status', 'sort_order', 'all_foods']);
        $data['price'] = $request->price ? (float) $request->price : 0.00;
        $data['slug'] = $request->slug;
        $data['all_foods'] = $request->has('all_foods') ? true : false;

        // Update addon
        $addon->update($data);

        // Handle food relationships
        if ($data['all_foods']) {
            // Clear all food relationships for "all foods"
            $addon->menus()->detach();
        } else {
            // Sync selected foods
            if ($request->has('food_ids')) {
                $foodIds = array_filter($request->food_ids);
                $addon->menus()->sync($foodIds);
            }
        }

        return redirect()->route('admin.addons.index')->with('success', 'Addon updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Addon $addon)
    {
        $addon->delete();

        return response()->json(['success' => true, 'message' => 'Addon deleted successfully!']);
    }

    /**
     * Search foods for addon selection
     */
    public function searchFoods(Request $request)
    {
        $search = $request->get('search', '');
        $query = Menu::active()->with('category');

        if ($search) {
            $query->where('name', 'like', "%{$search}%");
        }

        $foods = $query->orderBy('name', 'asc')->limit(10)->get();

        return response()->json($foods->map(function ($food) {
            return [
                'id' => $food->id,
                'name' => $food->name,
                'category' => $food->category->name ?? 'N/A',
                'price' => '$' . number_format($food->price, 2),
                'image_url' => $food->image_url
            ];
        }));
    }
}
