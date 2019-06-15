<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageVisits extends Model
{

    protected $fillable = [
        'user_id',
        'account_id'        
    ];


}
