<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class AdminUserController extends Controller
{
    public function index()
    {
        $data = User::select('users.*', 'roles.name AS role_name')
            ->join('roles', 'users.role', 'roles.id')
            ->get();
        return view("Admin.user_list", compact('data'));
    }

    public function delete($id) {
        User::find($id)->delete();
        return redirect("admin/user");
    }

}
