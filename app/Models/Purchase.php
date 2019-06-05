<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{ 
    protected $fillable = [
        'user_id',
        'package_item_id'      
    ];
}
