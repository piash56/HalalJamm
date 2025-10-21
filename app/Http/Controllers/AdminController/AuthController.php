<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\AdminUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    /**
     * Show the admin login form
     */
    public function showLoginForm()
    {
        return view('admin.auth.signin');
    }

    /**
     * Handle admin login
     */
    public function login(Request $request)
    {
        try {
            // Debug: Log the incoming request
            Log::info('Admin login attempt', [
                'email' => $request->email,
                'ip' => $request->ip(),
                'user_agent' => $request->userAgent()
            ]);

            $credentials = $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);

            // Check admin credentials in database
            $admin = AdminUser::where('email', $credentials['email'])->first();

            if ($admin && Hash::check($credentials['password'], $admin->password)) {
                // Set session data for admin
                session([
                    'admin_logged_in' => true,
                    'admin_id' => $admin->id,
                    'admin_email' => $admin->email,
                    'admin_name' => $admin->name,
                    'admin_phone' => $admin->phone ?? '',
                    'admin_address' => $admin->address ?? '',
                    'admin_bio' => $admin->bio ?? ''
                ]);

                // Handle remember me functionality
                if ($request->has('remember')) {
                    // Set a longer session duration for remember me
                    session(['admin_remember' => true]);
                }

                Log::info('Admin login successful', ['email' => $credentials['email']]);
                return redirect()->route('admin.dashboard')->with('success', 'Welcome back, Admin!');
            }

            Log::warning('Admin login failed - invalid credentials', ['email' => $credentials['email']]);
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
        } catch (\Exception $e) {
            Log::error('Admin login error', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            return back()->withErrors([
                'email' => 'An error occurred during login. Please try again.',
            ])->onlyInput('email');
        }
    }

    /**
     * Handle admin logout
     */
    public function logout()
    {
        session()->forget([
            'admin_logged_in',
            'admin_email',
            'admin_name',
            'admin_phone',
            'admin_address',
            'admin_bio',
            'admin_remember',
            'admin_password_updated'
        ]);
        return redirect()->route('admin.login')->with('success', 'You have been logged out successfully.');
    }

    /**
     * Show password reset request form
     */
    public function showPasswordResetForm()
    {
        return view('admin.auth.password');
    }

    /**
     * Send password reset link
     */
    public function sendPasswordResetLink(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:admin_users,email'
        ], [
            'email.exists' => 'No admin account found with this email address.'
        ]);

        $admin = AdminUser::where('email', $request->email)->first();

        if (!$admin) {
            return back()->withErrors(['email' => 'No admin account found with this email address.']);
        }

        // Generate reset token
        $token = Str::random(64);

        // Store token in database
        DB::table('admin_password_reset_tokens')->updateOrInsert(
            ['email' => $request->email],
            [
                'email' => $request->email,
                'token' => $token,
                'created_at' => now()
            ]
        );

        // Send email (for now, just show success message)
        // In production, you would send an actual email here
        return back()->with('success', 'Password reset link has been sent to your email address.');
    }

    /**
     * Show new password form
     */
    public function showNewPasswordForm(Request $request)
    {
        $token = $request->token;
        $email = $request->email;

        // Verify token
        $tokenData = DB::table('admin_password_reset_tokens')
            ->where('email', $email)
            ->where('token', $token)
            ->where('created_at', '>', now()->subHours(1)) // Token valid for 1 hour
            ->first();

        if (!$tokenData) {
            return redirect()->route('admin.password.request')
                ->with('error', 'Invalid or expired reset token.');
        }

        return view('admin.auth.new-password', compact('token', 'email'));
    }

    /**
     * Update password
     */
    public function updatePassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => ['required', 'confirmed', Password::defaults()],
        ]);

        // Verify token
        $tokenData = DB::table('admin_password_reset_tokens')
            ->where('email', $request->email)
            ->where('token', $request->token)
            ->where('created_at', '>', now()->subHours(1))
            ->first();

        if (!$tokenData) {
            return back()->withErrors(['token' => 'Invalid or expired reset token.']);
        }

        // Update password
        $admin = AdminUser::where('email', $request->email)->first();
        if ($admin) {
            $admin->update([
                'password' => Hash::make($request->password)
            ]);
        }

        // Delete token
        DB::table('admin_password_reset_tokens')
            ->where('email', $request->email)
            ->delete();

        return redirect()->route('admin.login')
            ->with('success', 'Password updated successfully. You can now login with your new password.');
    }
}
