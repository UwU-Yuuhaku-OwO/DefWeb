<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserDash;

class userinforController extends Controller
{

    public function UserPage(){
        $data = userinfor::get();
        return view('UserPage', compact('data'));
    }



}
