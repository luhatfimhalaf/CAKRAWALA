<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        // Ambil semua data kursus
        $courses = Course::all();

        // Kirim data ke view
        return view('kursus', compact('courses'));
    }
    public function show($id)
    {
        $course = Course::findOrFail($id);
        return view('detail-kursus', compact('course'));
    }
}
