<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;


Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\KursusController;
// Rute untuk halaman Kursus
Route::get('/kursus', function () {
    return view('kursus'); // langsung memanggil resources/views/kursus.blade.php
})->name('kursus.index');

Route::get('/kursus', [KursusController::class, 'index'])->name('kursus.index');
Route::view('/kursus', 'kursus')->name('kursus.index');
Route::get('/kursus', [KursusController::class, 'index'])->name('kursus.index');

// Rute untuk halaman About Us
use App\Http\Controllers\AboutUsController;
Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us.index');
Route::view('/about-us', 'about-us')->name('about-us.index');

// Rute untuk halaman FAQ
use App\Http\Controllers\FAQController;
Route::get('/faq', [AboutUsController::class, 'index'])->name('faq.index');
Route::view('/faq', 'faq')->name('faq.index');

use App\Http\Controllers\Auth\RegisterController;
Route::get('/register', [RegisterController::class, 'showForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

use App\Http\Controllers\LoginController;
Route::get('/login', [LoginController::class, 'index'])->name('login'); // Halaman login
Route::post('/login', [LoginController::class, 'authenticate']);       // Proses login
Route::view('/login', 'login')->name('login');

// Route untuk dashboard
Route::get('/dashboard', function () {
    return view('dashboard'); // Pastikan file view dashboard.blade.php ada
})->name('dashboard')->middleware('auth'); // Tambahkan middleware auth agar hanya user yang login bisa mengaksesnya

// Profile Routes
Route::get('/profiles', [ProfileController::class, 'index']);
Route::post('/profiles', [ProfileController::class, 'store']);
Route::get('/profile/{id}', [ProfileController::class, 'show']);
Route::put('/profiles/{id}', [ProfileController::class, 'update'])->name('profiles.update');
Route::delete('/profiles/{id}', [ProfileController::class, 'destroy'])->name('profiles.destroy');

