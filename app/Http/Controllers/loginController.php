<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index()
    {
        return view('login.login');
    }
    public function register()
    {
        return view('login.register');
    }
    public function proses(Request $req)
    {
        $credentials = $req->only('username', 'password');

        if (Auth::attempt($credentials)) {
            
            return redirect()->intended('/dashboard');
        }

        return redirect()->back();
    }
}