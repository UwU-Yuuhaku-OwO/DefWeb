<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class CustomAuthController extends Controller
{
    public function login(){

        return view("LoginPage");

    }

    public function register(){

        return view(("RegisterPage"));
    }
    public function registeruser(Request $request){

       $request->validate([
        'username'=>'required',
        'name'=>'required',
        'email'=>'required|email|unique:users',
        'password'=>'required|min:5|max:12'
       ]);
       $user = new User();
       $user->name = $request->name;
       $user->email = $request->email;
       $user->username = $request->username;
       $user->password = Hash::make($request->password);
       $res = $user->save();
       if($res){

        return back()->with('Success','You have registed');

       }else{

        return back()->with('Failed','Somethingwrong');


       }
    }

    public function login_user(Request $request) {
        $user = User::where('username', '=', $request->username)->first();


        if($user) {
            if(Hash::check($request->password, $user->password))
            Session::put('name', $user->name);
            Session::put('username', $user->username);
            Session::put('user_id', $user->id);
            Session::put('user_role', $user->role);

            if(Session::get('user_role') == 1) {
                return redirect('dashboard');
            } else {
                return redirect('HomePage');
            }

        } else {
            return redirect('LoginPage')->with("status", "Your username or password are not correct");
        }
    }

    public function logout() {
        if(Session::has('username')) {
            Session::pull('name');
            Session::pull('username');
            Session::pull('user_id');
            Session::pull('user_role');
            return redirect('HomePage');
        }
    }

}
