<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class CustomAuthController extends Controller
{
    public function login(){

        return view("LoginPage");

    }

    public function AdLog(){

        return view("AdLogPage");

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
       $data = User::where('username', '=', $request->username)->first();
       if(!$data){
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->username = $request->username;
            $user->password = Hash::make($request->password);
            $res = $user->save();
            if($res){

                return back()->with('Success','You have registed');

                Session::pull('success');
            }else{

                return back()->with('Failed','Somethingwrong');
                Session::pull('failed');
            }
         }
         else
         {
            return back()->with('Failed','User is existed !');
         }
    }
    public static function check_login_user($id) {
        $user = User::where('id', '=', $id)->first();
        if (!$user){
            Session::pull('name');
            Session::pull('username');
            Session::pull('user_id');
            Session::pull('user_role');
        }
        return $user;
    }


    public function login_user(Request $request) {
        $user = User::where('username', '=', $request->username)->first();



        if($user)
        {
            if(Hash::check($request->password, $user->password))
            {

            Session::put('name', $user->name);
            Session::put('username', $user->username);
            Session::put('user_id', $user->id);
            Session::put('user_role', $user->role);



              return redirect('HomePage');
            }
        }else{
            return redirect('LoginPage');
        }
    }

    public function login_admin(Request $request) {
        $admins = Admin::where('username', '=', $request->UserName)->first();


            if($admins) {
                if(($request->password == $admins->password)){
                Session::put('name', $admins->name);
                Session::put('username', $admins->username);
                Session::put('user_id', $admins->id);
                Session::put('user_role', $admins->role);


                return redirect('dashboard');

            }

            } else {
                return redirect('AdLogPage')->with("status", "Your username or password are not correct");
            }

        }
    public function logout() {
        // if(Session::has('username')) {
            Session::pull('name');
            Session::pull('username');
            Session::pull('user_id');
            Session::pull('user_role');
            return redirect('HomePage');
        // }
    }
    public function user_page($id){

        $user = User::where('id', '=',$id)->first();
        return view('UserPage',compact('user'));
    }

    // public function userpage(){
    //     return view('UserPage');
    // }

}
