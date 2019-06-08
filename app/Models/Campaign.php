<?php

namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use App\Models\Account;
use App\Models\CloutPackagesItems;

class Campaign extends Model
{

    protected $fillable = [
        'user_id',
        'account_id',
        'campaign_name',
        'campaign_description',
        'campaign_package',
        'campaign_status',
        'start_date',
        'plays'
    ]; 

    public function account(){
        return Account::where('id',$this->account_id);
    }

    public function purchase(){
        return CloutPackagesItems::where('id',$this->campaign_package);
    }
    
}
