<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User as userModel;

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
      
        return view('user.home');
       
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
