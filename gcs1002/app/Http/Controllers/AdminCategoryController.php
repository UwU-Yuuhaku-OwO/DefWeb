<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Products;

class AdminCategoryController extends Controller
{
    public function index()
    {
        $data = Category::get();
        return view('Admin.category', compact('data'));
    }

    public function delete($id) {

        $data = Products::where('CategoryID', '=', $id)->first();
        if($data)

            return redirect("admin/cat")->with('failed', 'Cannot delete this category');
        else{
            Category::find($id)->delete();

        return redirect("admin/cat");
        }
    }


    public function UserEditPage($id)
    {
        $data = Category::where('id', '=', $id)->first();

        return view('UserEditPage', compact('data'));
    }

    public function test()
    {
        $data = Category::get();
        return view('test', compact('data'));
    }

}
