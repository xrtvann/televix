<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\ActivityLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('pages.public.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ], [
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'password.required' => 'Password wajib diisi',
        ]);

        $credentials = $request->only('email', 'password');
        $remember = $request->boolean('remember');

        if (Auth::attempt($credentials, $remember)) {
            $user = Auth::user();

            // Load user roles and permissions
            $user->loadMissing(['roles.permissions']);

            // Check if user is active
            if (!$user->is_active) {
                Auth::logout();
                throw ValidationException::withMessages([
                    'email' => 'Akun Anda tidak aktif. Hubungi administrator.',
                ]);
            }

            // Update last login
            $user->updateLastLogin();

            // Log activity
            ActivityLog::log('user_login', $user);

            $request->session()->regenerate();

            return redirect()->intended(route('dashboard'))
                ->with('success', 'Selamat datang, ' . $user->name);
        }

        throw ValidationException::withMessages([
            'email' => 'Email atau password salah.',
        ]);
    }
}
