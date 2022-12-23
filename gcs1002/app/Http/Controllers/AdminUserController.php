<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{

    public function AdminIndex(){

        $data = Admin::select('admins.*')
            ->get();
        return view("Admin.AdminPage", compact('data'));
    }
    public function AdminAddPage()
    {
        $data = Admin::get();
        return view('AdAddPage', compact('data'));
    }
    public function AdminEditPage($id)
    {
        $data = Admin::where('id', '=', $id)->first();

        return view('AdEditPage', compact('data'));
    }

    public function Admindelete($id) {
        Admin::find($id)->delete();
        return redirect("admin/admin");
    }
    public function AdminSave(Request $request)
    {
        $admin = new Admin();
        $admin->ID = $request->id;
        $admin->AdName = $request->AdName;
        $admin->UserName = $request->UserName;
        $admin->Pass = $request->Pass;



        $admin->save();

        return redirect()->back()->with('success', 'User added successfully');
    }


    public function AdminEdit(Request $request)
    {
        $id = $request->id;


        Admin::where('id', '=', $id)->update([

            'id'=> $request->id,
            'AdName' => $request->AdName,
            'UserName'=>$request->UserName,
            'Pass'=>$request->Pass,


        ]);
        return redirect()->back()->with('success', 'User updated successfully');

    }










    public function UserEdit(Request $request)
    {
        $id = $request->id;


        User::where('id', '=', $id)->update([

            'name' => $request->name,

            'username'=>$request->username,

            'email'=>$request->email,


        ]);
        return redirect()->back()->with('success', 'User updated successfully');

    }

    public function UserEditPage($id)
    {
        $data = User::where('id', '=', $id)->first();

        return view('UserEditPage', compact('data'));
    }

    public function index()
    {
        // $data = User::select('users.*', 'roles.name AS role_name')
        //     ->join('roles', 'users.role', 'roles.id')
        //     ->get();
        $data = User::get();
        return view("Admin.user_list", compact('data'));
    }

    public function delete($id) {
        User::find($id)->delete();
        return redirect("admin/user");
    }
}
