<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\Campaign;
use App\Models\CloutPackagesItems;
use App\Models\CampaignHistory;
use Auth;


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
        return 'users dashboard';
    }

    public function campaign(){
        
        return view('user.superadmin.campaign');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
