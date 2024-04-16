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
}
