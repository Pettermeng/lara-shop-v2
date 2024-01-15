<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller {
    public function index()
    {
        return view('backend.dashboard');
    }

    public function AddPost()
    {
        return view('backend.add-post');
    }

    public function ListPost()
    {
        return view('backend.list-post');
    }

    //View Log
    public function ViewLog()
    {
        return view('backend.list-log');
    }

    //Website Logo
    public function AddLogo()
    {
        return view('backend.add-logo');
    }

    public function ListLogo()
    {
        return view('backend.list-logo');
    }
}
