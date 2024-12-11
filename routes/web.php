<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KursusController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
Route::get('/kursus', [KursusController::class, 'index'])->name('kursus');
Route::get('/tentang', [PageController::class, 'tentang'])->name('tentang');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/search', [SearchController::class, 'index'])->name('search');
Route::get('/akun', [AccountController::class, 'index'])->name('akun');