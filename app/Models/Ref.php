<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ref extends Model
{
    protected $fillable = [
        'user_id',
        'presenter_id',
        'amount',
        'commission'
    ];
}
