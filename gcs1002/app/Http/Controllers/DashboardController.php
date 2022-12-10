<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Products;

class DashboardController extends Controller
{
    public function index()
    {
        $data = Products::select('products.*', 'categories.cat_name')
            ->join('categories', 'products.categoryID', 'categories.id')
            ->get();
        return view("Admin.index", compact('data'));
    }

    public function delete($id) {
        Products::find($id)->delete();
        return redirect("dashboard");
    }

}
