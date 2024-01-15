<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    // Category
    public function AddCategory() {
        return view('backend.add-category');
    }

    public function ListCategory() {
        return view('backend.list-category');
    }

    // Attribute
    public function AddAttribute() {
        return view('backend.add-attribute');
    }
}
