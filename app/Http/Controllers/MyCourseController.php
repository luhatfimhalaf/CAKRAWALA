<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class MyCourseController extends Controller
{
    /**
     * Tampilkan daftar kursus.
     */
    public function index()
    {
        $courses = Course::all();
        return view('my-course', compact('courses'));
    }

    /**
     * Tampilkan detail kursus berdasarkan ID.
     */
    public function show($id)
    {
        $course = Course::findOrFail($id);
        return view('detail-my-course', compact('course'));
    }
}
