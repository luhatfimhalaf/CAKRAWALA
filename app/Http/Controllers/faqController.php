<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class faqController extends Controller
{
    public function index()
    {
        return view('faq.index', [
            'title' => 'FAQ'
        ]);
    }
}
