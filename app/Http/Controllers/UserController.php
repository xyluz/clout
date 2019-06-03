<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 

    public function invoice($package){
        return view('user.invoice');
    }

    public function dashboard(){
        //TODO: Change this to point to a single dashboard with different hidden apects
         
        if(Auth::user()->hasRole('user')){
            return view('user.home');
         }else if(Auth::user()->hasRole('superadmin')){
            return "superadmin";
         }else if(Auth::user()->hasRole('admin')){
            return "admin";
         }else if(Auth::user()->hasRole('presener')){
             return "presenter";
         }else{
             return "role not defined";
         }
        
       
    }
    
    public function profile(User $user){
        return $user->id;
    }

    public function edit(User $user){
        return $user->id;
    }

    public function settings(User $user){
        return $user->id;
    }
}
