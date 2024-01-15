<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Sign In
    public function Signin() {
        return view('backend.login');
    }

    // Sign Up
    public function Signup() {
        return view('backend.register');
    }

    //Logout
    public function SignOut() {
        Auth::logout();
        return redirect('signin');
    }
}
