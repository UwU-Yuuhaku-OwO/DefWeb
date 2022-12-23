<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminAddController extends Controller
{
    public function AdminAddPage()
    {
        $data = Admin::get();
        return view('AddAddPage', compact('data'));
    }

    public function AdminEditPage($id)
    {
        $data = Admin::where('id', '=', $id)->first();

        return view('AddEditPage', compact('data'));
    }

    public function AdminSave(Request $request)
    {
        $admin = new Admin();
        $admin->ID = $request->id;
        $admin->AdName = $request->AdName;
        $admin->UserName = $request->UserName;



        $admin->save();

        return redirect()->back()->with('success', 'User added successfully');
    }

     public function AdminEdit(Request $request)
    {
        $id = $request->id;


        Admin::where('id', '=', $id)->update([

            'id'=> $request->id,
            'adname' => $request->AdName,
            'username'=>$request->UserName,



        ]);
        return redirect()->back()->with('success', 'User updated successfully');

    }


}
