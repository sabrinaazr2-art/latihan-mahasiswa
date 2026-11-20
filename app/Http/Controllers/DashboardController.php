<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home()
    {
        $judul = 'Laman Home';
        return view('home', compact('judul'));
    }

    public function gallery()
    {
        $judul = 'Laman Gallery';
        return view('gallery', compact('judul'));
    }

    public function about()
    {
        $judul = 'Laman About';
        return view('about', compact('judul'));
    }
}
