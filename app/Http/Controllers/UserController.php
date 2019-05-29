<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }


    public function selectPackage($package){
        return $package;
        return view('invoice');
    }

    public function dashboard(){
        return view('user.home');
    }
}
