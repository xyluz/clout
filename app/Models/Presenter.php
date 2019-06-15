<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Presenter extends Model
{

    protected $fillable = [
        'user_id',
        'referral_code',
        'phone'
    ];
   
}
