<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class AdminCategoryController extends Controller
{
    public function index()
    {
        $data = Category::get();
        return view('Admin.category', compact('data'));
    }

    public function delete($id) {
        Category::find($id)->delete();
        return redirect("admin/cat");
    }

}
