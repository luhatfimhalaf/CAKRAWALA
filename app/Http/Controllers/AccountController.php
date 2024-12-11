<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index(Request $request)
    {
        // Ambil data pengguna saat ini (jika ada fitur autentikasi)
        $user = auth()->user(); // Pastikan autentikasi diatur dengan benar

        // Data dummy jika tidak ada autentikasi (opsional)
        if (!$user) {
            $user = [
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'created_at' => now(),
            ];
        }

        // Kirim data pengguna ke view
        return view('akun.index', ['user' => $user]);
    }
}
