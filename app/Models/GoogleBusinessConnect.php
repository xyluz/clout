<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GoogleBusinessConnect extends Model
{
    protected $fillable = [
        'account_id',
        'google_place_id'
    ];
}
