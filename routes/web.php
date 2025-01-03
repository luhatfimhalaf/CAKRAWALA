<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\CoursesController;


Route::get('/', function () {
    return view('welcome');
});

// Rute untuk halaman About Us
use App\Http\Controllers\AboutUsController;
Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us.index');
Route::view('/about-us', 'about-us')->name('about-us.index');

// Rute untuk halaman FAQ
use App\Http\Controllers\FAQController;
Route::get('/faq', [AboutUsController::class, 'index'])->name('faq.index');
Route::view('/faq', 'faq')->name('faq.index');

use App\Http\Controllers\ReminderController;
Route::resource('reminders', ReminderController::class);
Route::get('/reminder', [ReminderController::class, 'index'])->name('reminders.index');
Route::post('/reminders', [ReminderController::class, 'store'])->name('reminders.store');
Route::get('/schedule', [ReminderController::class, 'showSchedule'])->name('schedule.show');

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

Route::post('courses/buy',[CoursesController::class,'buy']);

<<<<<<< HEAD
=======
// use App\Http\Controllers\CourseController;
// Route::get('/', [CourseController::class, 'index'])->name('courses.index');
// Route::get('/courses/{id}', [CourseController::class, 'show'])->name('courses.show');

use App\Http\Controllers\TransactionController; 
Route::post('/transactions/{course_id}', [TransactionController::class, 'create'])->name('transactions.create');
Route::get('/transactions/{id}', [TransactionController::class, 'show'])->name('transactions.show');
Route::get('/transactions/{id}/pay', [TransactionController::class, 'simulatePayment'])->name('transactions.pay');
Route::post('/transactions', [TransactionController::class, 'store'])->name('transactions.store');

>>>>>>> 837017c7f2a8ea4a152f4910bbb861934e383975
use App\Http\Controllers\CourseController;
Route::get('/kursus', [CourseController::class, 'indexKursus'])->name('kursus');
Route::get('/kursus/{id}', [CourseController::class, 'show'])->name('kursus.detail');
Route::get('/courses', [CourseController::class, 'indexCourses'])->name('courses.index');
Route::get('/course/{id}', [CourseController::class, 'showCourse']);
Route::middleware('auth')->group(function () {
    Route::get('/my-courses', [PaymentController::class, 'myCourses'])->name('my-courses');
});

use App\Http\Controllers\MyCourseController;

Route::get('/my-courses', [MyCourseController::class, 'index'])->name('my-courses.index');
Route::get('/my-courses/{id}', [MyCourseController::class, 'show'])->name('my-courses.detail');

// Route::middleware(['auth'])->group(function () {
//     Route::get('/my-courses', [CourseController::class, 'myCourses'])->name('my.courses'); // Halaman My Courses
// });

use App\Http\Controllers\PaymentController;
Route::get('/kursus/{id}/pay', [PaymentController::class, 'payCourse']);
Route::get('/payment/{id}', [PaymentController::class, 'payCourse'])->name('payment');
Route::post('/payment/create', [PaymentController::class, 'createPayment'])->name('create.payment');
Route::get('/pay-course/{id}', [PaymentController::class, 'payCourse'])->name('pay.course');
Route::post('/payment', [PaymentController::class, 'createPayment']);
Route::post('/midtrans/callback', [PaymentController::class, 'handleMidtransCallback']);
Route::get('/my-courses', [PaymentController::class, 'myCourses'])->middleware('auth')->name('my-courses');

use App\Http\Controllers\QuizController;
use App\Http\Controllers\UserAnswerController;
use App\Http\Controllers\QuestionController;
// Quiz routes
Route::prefix('quiz')->group(function () {
    Route::get('/', [QuizController::class, 'index'])->name('quiz.index');
    Route::get('/{id}', [QuizController::class, 'show'])->name('quiz.show');
<<<<<<< HEAD
    Route::get('/{id}/result', [UserAnswerController::class, 'result'])->name('quiz.result');
=======
    Route::get('/{quiz_id}/result', [UserAnswerController::class, 'result'])->name('quiz.result');
>>>>>>> 837017c7f2a8ea4a152f4910bbb861934e383975
    Route::post('/submit', [UserAnswerController::class, 'submit'])->name('quiz.submit');
});

use App\Http\Controllers\ProfileController;

Route::middleware('auth')->group(function () {
    Route::get('/edit-profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard', ['user' => Auth::user()]);
    })->name('dashboard');
<<<<<<< HEAD
    Route::get('/edit-profile', [ProfileController::class, 'edit'])->name('profile.edit');
});

=======

    Route::get('/edit-profile', [ProfileController::class, 'edit'])->name('profile.edit');
});

<<<<<<< HEAD
>>>>>>> 837017c7f2a8ea4a152f4910bbb861934e383975
use App\Http\Controllers\PostController;

// Route::middleware(['auth'])->group(function () {
//     // Route untuk halaman utama forum
//     Route::get('/posts', [PostController::class, 'index'])->name('posts'); // Named route
    
//     // Route untuk membuat postingan baru
//     Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    
//     // Route untuk menyukai postingan
//     Route::post('/posts/{post}/like', [PostController::class, 'like'])->name('posts.like');
    
//     // Route untuk komentar pada postingan
//     Route::post('/posts/{post}/comment', [PostController::class, 'comment'])->name('posts.comment');
// });

use App\Http\Controllers\TweetController;
Route::resource('tweets', TweetController::class);

<<<<<<< HEAD
use App\Http\Controllers\DashboardController;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
=======
=======
>>>>>>> d85fb05f6cdeae5a596140ed0138c05b117d6775

>>>>>>> 837017c7f2a8ea4a152f4910bbb861934e383975


