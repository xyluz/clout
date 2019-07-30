<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\Campaign;
use App\Models\CloutPackagesItems;
use App\Models\CampaignHistory;
use App\Models\CloutPackages;
use Auth;
use App\Models\User;
use App\Models\Presenter;
use Alert;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function campaignUpdate(Request $request){
       
        $find = Campaign::where('id',$request->id)->first();
        
             
        if($find){
            
            $package = CloutPackagesItems::where('id',$find->campaign_package)->first();
        
            $find->campaign_status = 'running';         


            $present = $find->total_played;
            $new = $present + $request->play;

            if($new >= $package->package_item_available_count){
                //this means plays has finished
                $new = $package->package_item_available_count;
                $find->campaign_status = 'completed';

            }

            //update campaign history
            CampaignHistory::create([
                'user_id'=>Auth::user()->id,
                'campaign_id'=>$find->id,
                'account_id'=>$find->account_id,
                'url'=>$request->url,
                'description'=>$request->description
            ]);
           
            $find->total_played = $new;
            $find->save();

            return "success";

        }else{
            return "error";
        }
       
    }

    public function users(){
        $users = User::whereNotNull('id');
        return view('user.superadmin.user',compact('users'));
    }

    public function agents(){
        //fetch all presenters
        $agents = User::role('presenter');
       
        return view('user.superadmin.agent',compact('agents'));
    }

    public function createAgent(Request $request){
              
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'account_type' => 'agent',
            'password' => Hash::make($request->password),
        ]);       
       
        //assign role
        $user->assignRole('presenter');

        //add details to presenters
        Presenter::create([
            'user_id'=>$user->id,
            'referral_code'=> substr($request->name,0,3) . $request->code . substr($request->phone,4,8),
            'phone' => $request->phone
        ]);

             //TODO:send email

        alert()->success('New agent has been created','Success');
        return redirect()->back();

    }

    public function campaign(){
        
        return view('user.superadmin.campaign');
    }

    public function packages(){
        $mainpack = CloutPackages::whereNotNull('id');
        $packages = CloutPackagesItems::whereNotNull('id');
        return view('user.superadmin.package',compact('packages','mainpack'));
    }

    public function createPackage(Request $request){        

        CloutPackagesItems::create([
            'clout_package_id'=>$request->package_id,
            'package_item_name'=>$request->itemName,
            'package_item_description'=>$request->itemDescription,
            'package_item_unitprice'=>$request->unitPrice,
            'package_item_available_count'=>$request->availableCount,
        ]);

        alert()->success('New Package Item has been created','Success');
        return redirect()->back();

    }
}
