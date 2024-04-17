<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    public function dashboard()
    {
        return view('dashboard.dashboard');
    }

    // public function users()
    // {
    //     return view('dashboard.users');
    // }
    
    
    public function users()
    {
        $users = User::all();

        return view('dashboard.users', [
            'users' => $users,

        ]);
    }
    
    public function contact()
    {
        return view('dashboard.contact');
    }
    
    public function setting()
    {
        return view('dashboard.setting');
    }
    public function productheels()
    {
        return view('dashboard.product.heels');
    }
    public function productsneakers()
    {
        return view('dashboard.product.sneakers');
    }
    public function productboots()
    {
        return view('dashboard.product.boots');
    }
    public function productshoes()
    {
        return view('dashboard.product.shoes');
    }
    public function productshow()
    {
        return view('dashboard.product.shoes');
    }
}
