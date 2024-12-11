<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YourController extends Controller
{
    public function kursus()
    {
        // Return a view for the kursus page
        return view('kursus');
    }

    public function tentang()
    {
        // Return a view for the tentang page
        return view('tentang');
    }

    public function faq()
    {
        // Return a view for the faq page
        return view('faq');
    }

    // Other methods for 'akun', 'pembelajaran', etc.
}