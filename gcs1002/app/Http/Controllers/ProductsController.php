<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function HomePage()
    {
        $data = Products::get();
        return view('HomePage', compact('data'));
    }
}

