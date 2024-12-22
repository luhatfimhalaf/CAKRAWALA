<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KursusController extends Controller
{
    public function index()
    {
        $courses = [
            [
                'image' => 'images\UIUX Design Basics.png',
                'title' => 'UI/UX Design Basics',
                'category' => 'Technology',
                'lessons' => 15,
                'duration' => '20h 30m',
                'students' => 45,
                'price' => 500000,
                'instructor' => 'Jane Doe',
                'image-mentor' => 'images\Jane Doe.png',
            ],
            [
                'image' => 'images\Copywriting-Marketing.png',
                'title' => 'Mastering Copywriting for Marketing',
                'category' => 'Other',
                'lessons' => 12,
                'duration' => '15h 00m',
                'students' => 50,
                'price' => 450000,
                'instructor' => 'Sarah Johnson',
                'image-mentor' => 'images\Sarah-Johnson.png',
            ],
            [
                'image' => 'images\Data-Analytics-python.png',
                'title' => 'Data Analytics with Python',
                'category' => 'Technology',
                'lessons' => 18,
                'duration' => '30h 10m',
                'students' => 60,
                'price' => 750000,
                'instructor' => 'John Smith',
                'image-mentor' => 'images\John Smith.png',
            ],
            [
                'image' => 'images\Excel-professionals.png',
                'title' => 'Excel for Data Professionals',
                'category' => 'other',
                'lessons' => 10,
                'duration' => '12h 20m',
                'students' => 40,
                'price' => 400000,
                'instructor' => 'Michael Lee',
                'image-mentor' => 'images\Michael Lee.png',
            ],
            [
                'image' => 'images\Copywriting-Ads.png',
                'title' => 'Copywriting for Social Media Ads',
                'category' => 'Other',
                'lessons' => 8,
                'duration' => '10h 50m',
                'students' => 35,
                'price' => 350000,
                'instructor' => 'Anna Brown',
                'image-mentor' => 'images\Anna Brown.png',
            ],
            [
                'image' => 'images\Front-End-React.png',
                'title' => 'Front-End Development with React',
                'category' => 'Technology',
                'lessons' => 20,
                'duration' => '30h 10m',
                'students' => 60,
                'price' => 750000,
                'instructor' => 'Emily Carter',
                'image-mentor' => 'images\Emily Carter.png',
            ],
        ];
        $query = $request->input('search'); // Ambil query dari input search
        // Cari data kursus berdasarkan query (contoh menggunakan model Course)
        $courses = Course::where('title', 'like', '%' . $query . '%')
                         ->orWhere('description', 'like', '%' . $query . '%')
                         ->get();

        // Kirim hasil pencarian ke view
        return view('kursus', compact('courses', 'query'));
        return view('kursus', compact('courses'));
    }
}
