<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    // Menampilkan daftar kursus untuk /kursus
    public function indexKursus()
    {
        $courses = Course::all(); // Ambil semua data kursus
        return view('kursus', compact('courses')); // Menggunakan view 'kursus.blade.php'
    }

    // Menampilkan daftar kursus untuk /courses
    public function indexCourses()
    {
        $courses = Course::all(); // Ambil semua data kursus
        return view('courses.index', compact('courses')); // Menggunakan view 'courses.index.blade.php'
    }

    // Menampilkan detail kursus berdasarkan ID
    public function show($id)
    {
        $course = Course::findOrFail($id);
        return view('detail-kursus', compact('course'));
    }

    public function showCourse($id){
        $course = Course::findOrFail($id);  // Mengambil data course berdasarkan ID
        return view('courses.show', compact('course'));
    }

    // Menampilkan kursus yang dimiliki oleh pengguna yang sedang login
    public function myCourses()
    {
        // Ambil transaksi yang sudah selesai (status success) milik user yang sedang login
        $transactions = Transaction::where('email', Auth::user()->email)
            ->where('status', 'success')
            ->get();

        // Ambil kursus berdasarkan ID kursus yang ada di transaksi
        $courseIds = $transactions->pluck('course_id')->toArray();
        $courses = Course::whereIn('id', $courseIds)->get();

        // Kirim data ke view
        return view('my-courses', compact('courses'));
    }

    // Menampilkan dashboard
    public function dashboard()
    {
        // Ambil satu data kursus untuk tombol "Learn More"
        $course = Course::first(); // Sesuaikan dengan logika bisnis
        return view('dashboard', compact('course'));
    }
    function extractYouTubeVideoId($url) {
        preg_match('/(?:https?:\/\/)?(?:www\.)?youtube\.com\/watch\?v=([a-zA-Z0-9_-]+)|youtu\.be\/([a-zA-Z0-9_-]+)/', $url, $matches);
        return $matches[1] ?? $matches[2] ?? null;
    }
}
