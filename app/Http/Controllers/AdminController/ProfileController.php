<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\AdminUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class ProfileController extends Controller
{
    /**
     * Show the admin profile page
     */
    public function index()
    {
        // Get admin info from database
        $admin = AdminUser::find(session('admin_id'));

        if (!$admin) {
            return redirect()->route('admin.login')->with('error', 'Please login to access this page.');
        }

        return view('admin.profile.index', compact('admin'));
    }

    /**
     * Update admin profile information
     */
    public function updateProfile(Request $request)
    {
        $admin = AdminUser::find(session('admin_id'));

        if (!$admin) {
            return redirect()->route('admin.login')->with('error', 'Please login to access this page.');
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admin_users,email,' . $admin->id,
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:500',
            'bio' => 'nullable|string|max:1000',
        ]);

        // Update database
        $admin->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'bio' => $request->bio,
        ]);

        // Update session data
        session([
            'admin_name' => $admin->name,
            'admin_email' => $admin->email,
            'admin_phone' => $admin->phone,
            'admin_address' => $admin->address,
            'admin_bio' => $admin->bio,
        ]);

        return redirect()->route('admin.profile.index')
            ->with('success', 'Profile updated successfully!');
    }

    /**
     * Update admin password
     */
    public function updatePassword(Request $request)
    {
        $admin = AdminUser::find(session('admin_id'));

        if (!$admin) {
            return redirect()->route('admin.login')->with('error', 'Please login to access this page.');
        }

        $request->validate([
            'current_password' => 'required',
            'password' => ['required', 'confirmed', Password::defaults()],
        ]);

        // Check if current password is correct
        if (!Hash::check($request->current_password, $admin->password)) {
            return back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }

        // Update password in database
        $admin->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('admin.profile.index')
            ->with('success', 'Password updated successfully!');
    }
}
