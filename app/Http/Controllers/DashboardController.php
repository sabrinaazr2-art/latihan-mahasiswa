<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home()
    {
        $judul = 'Home';
        return view('home', compact('judul'));
    }

    public function gallery()
    {
        $judul = 'Gallery';
        return view('gallery', compact('judul'));
    }
}