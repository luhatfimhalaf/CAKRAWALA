<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
     // Menampilkan form registrasi
     public function showRegistrationForm()
     {
         return view('auth.register'); // Pastikan kamu punya file view 'auth.register'
     }
 
     // Menangani registrasi
     public function register(Request $request)
     {
         // Validasi dan proses pendaftaran
         // Misalnya menggunakan Auth untuk mendaftar pengguna baru
     }
}
