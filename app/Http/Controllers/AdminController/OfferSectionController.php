<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\OfferSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class OfferSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $offerSections = OfferSection::orderBy('created_at', 'desc')->get();
        return view('admin.offer-sections.index', compact('offerSections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.offer-sections.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'small_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'primary_text' => 'required|string|max:255',
            'secondary_text' => 'required|string|max:255',
            'secondary_price' => 'nullable|numeric|min:0',
            'small_text' => 'nullable|string',
            'button_text' => 'nullable|string|max:255',
            'button_url' => 'nullable|url',
            'offer_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'offer_price_text' => 'nullable|string|max:255',
            'offer_price' => 'nullable|numeric|min:0',
            'is_active' => 'boolean'
        ]);

        $data = $request->all();
        $data['is_active'] = $request->has('is_active');

        // Handle small image upload
        if ($request->hasFile('small_image')) {
            $image = $request->file('small_image');
            $imageName = time() . '_' . Str::slug($request->primary_text) . '_small.' . $image->getClientOriginalExtension();
            
            Storage::disk('public')->putFileAs('offer', $image, $imageName);
            $data['small_image'] = $imageName;
        }

        // Handle offer image upload
        if ($request->hasFile('offer_image')) {
            $image = $request->file('offer_image');
            $imageName = time() . '_' . Str::slug($request->primary_text) . '_offer.' . $image->getClientOriginalExtension();
            
            Storage::disk('public')->putFileAs('offer', $image, $imageName);
            $data['offer_image'] = $imageName;
        }

        OfferSection::create($data);

        return redirect()->route('admin.offer-sections.index')->with('success', 'Offer section created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OfferSection $offerSection)
    {
        return view('admin.offer-sections.edit', compact('offerSection'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OfferSection $offerSection)
    {
        $request->validate([
            'small_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'primary_text' => 'required|string|max:255',
            'secondary_text' => 'required|string|max:255',
            'secondary_price' => 'nullable|numeric|min:0',
            'small_text' => 'nullable|string',
            'button_text' => 'nullable|string|max:255',
            'button_url' => 'nullable|url',
            'offer_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'offer_price_text' => 'nullable|string|max:255',
            'offer_price' => 'nullable|numeric|min:0',
            'is_active' => 'boolean'
        ]);

        $data = $request->all();
        $data['is_active'] = $request->has('is_active');

        // Handle small image upload
        if ($request->hasFile('small_image')) {
            // Delete old image if exists
            if ($offerSection->small_image && Storage::disk('public')->exists('offer/' . $offerSection->small_image)) {
                Storage::disk('public')->delete('offer/' . $offerSection->small_image);
            }

            $image = $request->file('small_image');
            $imageName = time() . '_' . Str::slug($request->primary_text) . '_small.' . $image->getClientOriginalExtension();
            
            Storage::disk('public')->putFileAs('offer', $image, $imageName);
            $data['small_image'] = $imageName;
        }

        // Handle offer image upload
        if ($request->hasFile('offer_image')) {
            // Delete old image if exists
            if ($offerSection->offer_image && Storage::disk('public')->exists('offer/' . $offerSection->offer_image)) {
                Storage::disk('public')->delete('offer/' . $offerSection->offer_image);
            }

            $image = $request->file('offer_image');
            $imageName = time() . '_' . Str::slug($request->primary_text) . '_offer.' . $image->getClientOriginalExtension();
            
            Storage::disk('public')->putFileAs('offer', $image, $imageName);
            $data['offer_image'] = $imageName;
        }

        $offerSection->update($data);

        return redirect()->route('admin.offer-sections.index')->with('success', 'Offer section updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OfferSection $offerSection)
    {
        // Delete images if exist
        if ($offerSection->small_image && Storage::disk('public')->exists('offer/' . $offerSection->small_image)) {
            Storage::disk('public')->delete('offer/' . $offerSection->small_image);
        }
        
        if ($offerSection->offer_image && Storage::disk('public')->exists('offer/' . $offerSection->offer_image)) {
            Storage::disk('public')->delete('offer/' . $offerSection->offer_image);
        }

        $offerSection->delete();

        return redirect()->route('admin.offer-sections.index')->with('success', 'Offer section deleted successfully!');
    }
}