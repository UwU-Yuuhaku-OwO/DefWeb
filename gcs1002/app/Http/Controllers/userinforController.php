<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class UserinforController extends Controller
{

    // public function index() {
    //     $data = Admin::select('admins.*', 'roles.name AS role_name')
    //         ->join('roles', 'admins.role', 'roles.id')
    //         ->get();
    //     return view("Admin.AdminPage", compact('data'));
    // }


    // public function delete($id) {
    //     Admin::find($id)->delete();
    //     return view("admin/admin");
    // }

    public function index(){

        $data = Admin::select('admins.*')
            ->get();
        return view("Admin.AdminPage", compact('data'));
    }

    public function delete($id) {
        Admin::find($id)->delete();
        return redirect("admin/admin");
    }

    public function UserPage($id)
    {
        $data = User::where('id', '=', $id)->first();

        return view('UserPage', compact('data'));
    }

    public function user_show(Request $request)
    {
        $id = $request->id;


        User::where('id', '=', $id)->update([

            'name' => $request->name

        ]);
        return redirect()->back()->with('success', 'Category updated successfully');
    }

    public function test()
    {
        $data = User::get();
        return view('test', compact('data'));
    }

}
