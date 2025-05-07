<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('auth.login'); // Pastikan view login berada di resources/views/auth/login.blade.php
    }

    // Menangani proses login
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');
        
        if (Auth::attempt($credentials)) {
            // Jika login berhasil
            return redirect()->intended('dashboard'); // Redirect ke dashboard
        }

        // Jika login gagal
        return back()->withErrors([
            'username' => 'Username atau password salah.',
        ]);
    }

    // Menampilkan dashboard setelah login
    public function dashboard()
    {
        return view('dashboard');
    }

    // Logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.form'); // Redirect ke halaman login setelah logout
    }
}
?>
