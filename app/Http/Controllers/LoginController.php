<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Cek kredensial pengguna menggunakan Auth
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Redirect ke dashboard atau halaman lain setelah login sukses
            return redirect()->intended('/dashboard');
        }

        // Jika login gagal, kembalikan ke halaman login dengan pesan error
        return back()->withErrors([
            'email' => 'Email atau password salah!',
        ])->onlyInput('email');
    }
}
