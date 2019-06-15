<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CloutPackagesItems;
use App\Models\Campaign;

class Purchase extends Model
{ 
    protected $fillable = [
        'user_id',
        'package_item_id'      
    ];

    public function details(){ 
        
        return CloutPackagesItems::where('id',$this->package_item_id);

    }

    public function remaining(){

        $w = CloutPackagesItems::where('id',$this->package_item_id)->first()->package_item_available_count;
        $c = Campaign::where('campaign_package',$this->package_item_id)->first()['total_played'];
        
        return $w - $c > 0 ? $w - $c : 0;
    }

    public function totalPlays(){
        return Campaign::where('campaign_package',$this->package_item_id)->first()['total_played'];
    }

    public function availablePlays(){
        return $w = CloutPackagesItems::where('id',$this->package_item_id)->first()->package_item_available_count;
    }

    public function status(){
 
        $w = CloutPackagesItems::where('id',$this->package_item_id)->first();
        $c = Campaign::where('campaign_package',$this->package_item_id)->first();
        if(!$c){
            //no campaign has been started with this item
            return true;
        }

        if($w->package_item_available_count > $c->total_played){
            //this means its still available
            return true;
        }            
        
        return false;

    }

}
