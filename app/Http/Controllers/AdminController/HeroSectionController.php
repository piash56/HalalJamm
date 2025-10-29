<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\HeroSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class HeroSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $heroSections = HeroSection::orderBy('created_at', 'desc')->get();
        return view('admin.hero-sections.index', compact('heroSections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.hero-sections.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'small_text' => 'nullable|string|max:255',
            'primary_text' => 'required|string|max:255',
            'secondary_text' => 'nullable|string',
            'button_text' => 'nullable|string|max:255',
            'button_url' => 'nullable|url',
            'hero_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price_text' => 'nullable|string|max:255',
            'price' => 'nullable|numeric|min:0',
            'is_active' => 'boolean'
        ]);

        $data = $request->all();
        $data['is_active'] = $request->has('is_active');

        // Handle image upload
        if ($request->hasFile('hero_image')) {
            $image = $request->file('hero_image');
            $imageName = time() . '_' . Str::slug($request->primary_text) . '.' . $image->getClientOriginalExtension();

            // Store in Laravel's proper storage location
            Storage::disk('public')->putFileAs('hero', $image, $imageName);
            $data['hero_image'] = $imageName;
        }

        HeroSection::create($data);

        return redirect()->route('admin.hero-sections.index')->with('success', 'Hero section created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HeroSection $heroSection)
    {
        return view('admin.hero-sections.edit', compact('heroSection'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HeroSection $heroSection)
    {
        $request->validate([
            'small_text' => 'nullable|string|max:255',
            'primary_text' => 'required|string|max:255',
            'secondary_text' => 'nullable|string',
            'button_text' => 'nullable|string|max:255',
            'button_url' => 'nullable|url',
            'hero_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price_text' => 'nullable|string|max:255',
            'price' => 'nullable|numeric|min:0',
            'is_active' => 'boolean'
        ]);

        $data = $request->all();
        $data['is_active'] = $request->has('is_active');

        // Handle image upload
        if ($request->hasFile('hero_image')) {
            // Delete old image if exists
            if ($heroSection->hero_image && Storage::disk('public')->exists('hero/' . $heroSection->hero_image)) {
                Storage::disk('public')->delete('hero/' . $heroSection->hero_image);
            }

            $image = $request->file('hero_image');
            $imageName = time() . '_' . Str::slug($request->primary_text) . '.' . $image->getClientOriginalExtension();

            // Store in Laravel's proper storage location
            Storage::disk('public')->putFileAs('hero', $image, $imageName);
            $data['hero_image'] = $imageName;
        }

        $heroSection->update($data);

        return redirect()->route('admin.hero-sections.index')->with('success', 'Hero section updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HeroSection $heroSection)
    {
        // Delete image if exists
        if ($heroSection->hero_image && Storage::disk('public')->exists('hero/' . $heroSection->hero_image)) {
            Storage::disk('public')->delete('hero/' . $heroSection->hero_image);
        }

        $heroSection->delete();

        return redirect()->route('admin.hero-sections.index')->with('success', 'Hero section deleted successfully!');
    }
}
