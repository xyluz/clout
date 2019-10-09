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
        $packages = CloutPackages::whereNotNull('id');
        
        return view('user.superadmin.user',compact('users','packages'));

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

    public function packages($packageId){
        $mainpack = CloutPackages::whereNotNull('id');
        $packages = CloutPackagesItems::where('clout_package_id',$packageId);
        return view('user.superadmin.package',compact('packages','mainpack'));
    }

    public function mainpackages(){
        $packages = CloutPackages::whereNotNull('id');     
        return view('user.superadmin.main-package',compact('packages'));
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

    public function createMainPackage(Request $request){

        $smallIcon = '';
        $largeIcon = '';

        if($request->smallIcon){            
            $smallIcon = $request->file('smallIcon')->store('public'); 
        }   
        if($request->largeIcon){            
            $largeIcon = $request->file('largeIcon')->store('public');
        }       

        CloutPackages::create([ 

            'package_name'=>$request->packageName,
            'package_description'=>$request->packageDescription,
            'package_price'=>$request->packagePrice,
            'large_icon'=> $largeIcon,
            'small_icon'=>$smallIcon,
            'display_as'=>$request->displayAs,
            'position'=>$request->productPosition ,
            'single_page_content'=>$request->moreDetails,
            'color'=>$request->color
        ]);

        alert()->success('New Package created','Success');
        return redirect()->back();
    }
 
    public function destroy($id){

        $find = CloutPackages::where('id',$id);

        if($find){
            $find->delete();
            alert()->success('New Package Deleted','Success');
        }else{
            alert()->error('Package was not deleted, something went wrong','Error');
        }
       
        return redirect()->back();

    }

    public function destroyUser($id){
        
        $find = User::where('id',$id);

        if($find){
            $find->delete();
            alert()->success('User Deleted','Success');
        }else{
            alert()->error('User was not deleted, something went wrong','Error');
        }
       
        return redirect()->back();
    }

    public function destroyPackageItem($id){

        $find = CloutPackagesItems::where('id',$id);

        if($find){
            $find->delete();
            alert()->success('New Package Item Deleted','Success');
        }else{
            alert()->error('Package Item was not deleted, something went wrong','Error');
        }
       
        return redirect()->back();
    }

    public function edit($id){

        $package = CloutPackages::where('id',$id)->get()[0];
    
        if($package){
  
            return view('user.superadmin.edit-main-package',compact('package'));

        }else{
            alert()->error('Package not found','Error');

        }

    }


    public function editPackage(Request $request){

        $find = CloutPackages::find($request->packageId);

        // return dd($find);

        $smallIcon = $request->small_icon_old != '' ? $request->small_icon_old : '';
        $largeIcon = $request->large_icon_old != '' ? $request->large_icon_old : '';

        if($request->smallIcon){            
            $smallIcon = $request->file('smallIcon')->store('public'); 
        }   
        if($request->largeIcon){            
            $largeIcon = $request->file('largeIcon')->store('public');
        }       

        if($find){

            $find->package_name = $request->packageName;
            $find->package_description = $request->packageDescription;
            $find->package_price = $request->packagePrice;
            $find->large_icon = $largeIcon;
            $find->small_icon = $smallIcon;
            $find->display_as = $request->displayAs;
            $find->position = $request->productPosition;
            $find->single_page_content = $request->moreDetails;
            $find->color = $request->color;

            $find->save();

            alert()->success('Package Updated','Success');

        }else{

            alert()->error('Package not found','Error');

        }
        return redirect()->route('a.mainpackages');
    }

}
