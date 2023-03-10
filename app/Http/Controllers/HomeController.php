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

    public function login()
    {
        return view('loginpage.login');
    }

    public function dashboard()
    {
        return view('dashboard.dashboard');
    }

    public function dashtable()
    {
        return view('dashboard.table');
    }
}
