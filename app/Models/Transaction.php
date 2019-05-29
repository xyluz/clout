<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'user_id',
        'account_id',
        'amount',
        'method',
        'ref',
        'status',
        'description' 
    ];
}
