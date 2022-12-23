<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Category;

class ProductsController extends Controller
{
    public function index()
    {
        $data = Products::get();
        // return $data;
        return view('product-list', compact('data')); //view
    }


    public function ShoppingPage()
    {
        $data = Products::select('products.*', 'categories.cat_name')
        ->join('categories', 'products.categoryID', 'categories.id')
        ->get();
        return view('ShoppingPage', compact('data'));
    }

    public function HomePage()
    {
        $data = Products::get();
        return view('HomePage', compact('data'));
    }

    public function LoginPage()
    {
        $data = Products::get();
        return view('LoginPage', compact('data'));
    }
    public function AdLogPage()
    {
        $data = Products::get();
        return view('AdLogPage', compact('data'));
    }
    public function RegisterPage()
    {
        $data = Products::get();
        return view('RegisterPage', compact('data'));
    }
    public function AddPage()
    {
        $data = Category::get();
        return view('AddPage', compact('data'));
    }


    public function save(Request $request)
    {
        $product = new Products();
        $product->product = $request->product;
        $product->price = $request->price;
        $product->img = $request->img;
        $product->categoryID = $request->categoryID;
        $product->save();

        return redirect()->back()->with('success', 'Product added successfully');
    }
    public function edit($id)
    {
        $data = Products::where('id', '=', $id)->first();

        return view('product-edit', compact('data'));
    }
    public function edit2($id)
    {
        $data = Products::where('id', '=', $id)->first();

        $categories = Category::get();
        return view('EditPage', compact('data', 'categories'));
    }

    public function update(Request $request)
    {
        $id = $request->id;
        Products::where('id', '=', $id)->update([

            'product' => $request->product,
            'price' => $request->price,
            'img' => $request->img_pass,
            'categoryID' => $request->categoryID,
        ]);
        return redirect()->back()->with('success', 'Product updated successfully');
    }

    public function delete($id)
    {
        Products::where('id', '=', $id)->delete();
        return redirect()->back()->with('success', 'Product delete successfully');
    }
}
