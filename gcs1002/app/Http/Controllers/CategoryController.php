<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function CatAddPage()
    {
        $data = Category::get();
        return view('CatAddPage', compact('data'));
    }

    public function CatEditPage($id)
    {
        $data = Category::where('id', '=', $id)->first();

        return view('CatEditPage', compact('data'));
    }

    public function CatSave(Request $request)
    {
        $categories = new Category();
        $categories->cat_name = $request->cat_name;
        $categories->save();
        return redirect()->back()->with('success', 'Product added successfully');
    }

    public function CatEdit(Request $request)
    {
        $id = $request->id;


        Category::where('id', '=', $id)->update([

            'cat_name' => $request->cat_name

        ]);
        return redirect()->back()->with('success', 'Category updated successfully');

    }

}
