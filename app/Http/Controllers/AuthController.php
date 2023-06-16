<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];


        if(!Auth::attempt($credentials)) {
            return redirect()->back()->with("message", "Login failed");
        }

        return redirect()->to("/dashboard");
        
    }

    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required'],
        ]);

        $user = new User;
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->password = bcrypt($validated['password']);

        $user->save();

        return redirect()->to("/login");
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        session()->invalidate();
        session()->flush();
        session()->regenerateToken();

        return redirect()->to("/login");
    }
    public function forgottenpassword()
    {
        return view('auth.forgotpassword');
    }
}
