<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'user_id',
        'picture',
        'nickname',
        'phone',
        'office',
        'location'
    ];
}
