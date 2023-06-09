<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    
    public function contact()
    {
        return view('pages.contact');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function blog()
    {
        return view('pages.blog');
    }
    public function dashboard()
    {
        return view('dashboard.dashboard');
    }
}
