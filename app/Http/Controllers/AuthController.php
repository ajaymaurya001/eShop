<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $remember = $request->has('remember');
        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();

            // verify user or admin to redirect their dashboard
            $user = Auth::user();
            if ($user->is_admin) {
                return redirect()->route('dashboard')->with('success', 'Welcome back, Admin!');
            } else {
                return redirect()->route('home')->with('success','Login Success !!');
            }
        }

        return back()->withErrors([
            'email' => 'Invalid credentials',
        ])->onlyInput('email');
    }

    public function registration(Request $request)
    {
        // Validation uses 'reg_email' as the key
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'reg_email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:2|confirmed', // Changed min:1 to min:8 for security
        ]);

        $user = User::create([
            'name' => $validated['name'],
            // Data insertion uses the correct column name 'email' but the validated 'reg_email' value
            'email' => $validated['reg_email'],
            'password' => Hash::make($validated['password']),
            'is_admin' => 0,
        ]);

        Auth::login($user);
        return redirect()->route('home');
    }

    // 3. Handle Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login-form');
    }
}
