<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $data = category::get();
        return view('category-list', compact('data'));
    }
}
