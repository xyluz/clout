<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\User;
use App\Models\Ref;

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

    public function ref($id='',$name=''){
      
        $user = User::find($id);

        if($user->name == $name) {

            //add the ref to database for the user
            Ref::create([
                'user_id'=>Auth::user()->id,
                'presenter_id'=>$user->id
            ]);

            //send them to register page    
            return redirect()->route('register');       

        }

            alert()->error('There seems to be something wrong with the referal link, please try again','Error');
        
    }
}
