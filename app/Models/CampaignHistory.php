<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CampaignHistory extends Model
{
    protected $fillable = [
        'user_id',
        'campaign_id',
        'account_id',
        'url',
        'description'
    ];
}
