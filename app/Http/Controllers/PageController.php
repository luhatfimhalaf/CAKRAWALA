<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function tentang()
    {
        return view('tentang'); // assuming you have a 'tentang.blade.php' view file
    }
    public function faq()
    {
        return view('faq'); // Assuming a view file named 'faq.blade.php' exists
    }
}
