<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class DashboardController extends Controller
{
    public function index()
    {
        $courses = Course::all(); // Mengambil semua data kursus
        return view('dashboard', compact('courses'));
    }
}
