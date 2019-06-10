<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class HomeController extends Controller
{   
      
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {        
        return view('home');
    }

    public function packages(){
        return view('packages');
    }

    public function business($id = '', $name=''){
        return view('business-single');
    }

    public function businessGroup(){
        //fetch all businesses
        $accounts = Account::where('type','business');
        return view('business-search',compact('accounts'));
    }

    public function artistGroup(){
        //fetch all businesses
        $accounts = Account::where('type','artist');
        return view('artist-search',compact('accounts'));
    }
}
