<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\User;
use App\Models\Ref;
use App\Models\GoogleBusinessConnect;
use App\Models\Product; 
use App\Models\Media;

class HomeController extends Controller
{    
      
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   
    public function index(Request $request){
        
        if($request){
            
            GoogleBusinessConnect::create([
                'account_id'=>1,
                'google_place_id'=>$request->code
            ]);
        }
        
        return view('home');
    }

    public function test(){
        return view('email.welcome');
    }

    public function packages(){
        return view('packages');
    }

    public function sp(){
        return view('special-packages');
    }

    public function business($id = '', $name=''){

        $account = Account::where('id',$id)->first();
        $place_id = GoogleBusinessConnect::where('account_id',$id)->first();
        $products = Product::where('account_id',$id);
        $media = Media::where('account_id',$id);

        return view('business-single',compact('account','place_id','products','media'));

    }

    public function artist($id = '', $name=''){

        $account = Account::where('id',$id)->first();
        $place_id = GoogleBusinessConnect::where('account_id',$id)->first();
        $products = Product::where('account_id',$id);
        $media = Media::where('account_id',$id);

        // return view('artist-single',compact('account','place_id','products','media'));

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
