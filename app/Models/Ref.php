<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ref extends Model
{
    protected $fillable = [
        'user_id',
        'presenter_id',
        'amount',
        'commission',
        'package_item_id'
    ];
}
