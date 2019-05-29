<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }


    public function invoice($package){
        return view('user.invoice');
    }

    public function dashboard(){
        return view('user.home');
    }
}
