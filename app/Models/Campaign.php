<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $fillable = [
        'user_id',
        'account_id',
        'campaign_name',
        'campaign_description',
        'campaign_package',
        'campaign_status'
    ];
    
}
