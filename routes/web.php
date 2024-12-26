<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\CoursesController;


Route::get('/', function () {
    return view('welcome');
});

// use App\Http\Controllers\KursusController;
// // Rute untuk halaman Kursus
// Route::get('/kursus', function () {
//     return view('kursus'); // langsung memanggil resources/views/kursus.blade.php
// })->name('kursus.index');

// Route::get('/kursus', [KursusController::class, 'index'])->name('kursus.index');
// Route::view('/kursus', 'kursus')->name('kursus.index');
// Route::get('/kursus', [KursusController::class, 'index'])->name('kursus.index');
// Route::get('/kursus/{id}', [KursusController::class, 'show'])->name('kursus.detail');
// Route::get('/kursus', [KursusController::class, 'search'])->name('kursus.search');

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

// use App\Http\Controllers\PaymentController;
// Route::resource('payments', PaymentController::class);

Route::post('courses/buy',[CoursesController::class,'buy']);

// use App\Http\Controllers\CourseController;
// Route::get('/', [CourseController::class, 'index'])->name('courses.index');
// Route::get('/courses/{id}', [CourseController::class, 'show'])->name('courses.show');

use App\Http\Controllers\TransactionController; 
Route::post('/transactions/{course_id}', [TransactionController::class, 'create'])->name('transactions.create');
Route::get('/transactions/{id}', [TransactionController::class, 'show'])->name('transactions.show');
Route::get('/transactions/{id}/pay', [TransactionController::class, 'simulatePayment'])->name('transactions.pay');
Route::post('/transactions', [TransactionController::class, 'store'])->name('transactions.store');


use App\Http\Controllers\CourseController;
Route::get('/kursus', [CourseController::class, 'index'])->name('kursus.index');
Route::get('/kursus/{id}', [CourseController::class, 'show'])->name('kursus.detail');

use App\Http\Controllers\PaymentController;
Route::get('/kursus/{id}/pay', [PaymentController::class, 'payCourse']);
Route::get('/payment/{id}', [PaymentController::class, 'payCourse'])->name('payment');
Route::post('/payment/create', [PaymentController::class, 'createPayment'])->name('create.payment');
Route::get('/pay-course/{id}', [PaymentController::class, 'payCourse'])->name('pay.course');
Route::post('/payment', [PaymentController::class, 'createPayment']);




