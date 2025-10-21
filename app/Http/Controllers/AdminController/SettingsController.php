<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        $taxEnabled = Setting::get('tax_enabled', false);
        $taxPercentage = Setting::get('tax_percentage', 10);

        return view('admin.apps.settings', compact('taxEnabled', 'taxPercentage'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'tax_enabled' => 'boolean',
            'tax_percentage' => 'required_if:tax_enabled,1|numeric|min:0|max:100'
        ]);

        Setting::set('tax_enabled', $request->tax_enabled ? '1' : '0', 'boolean');

        if ($request->tax_enabled) {
            Setting::set('tax_percentage', $request->tax_percentage, 'number');
        }

        return back()->with('success', 'Settings updated successfully!');
    }
}
