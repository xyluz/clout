<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $fillable = [
        'user_id',
        'account_id',
        'media_type',
        'media_title',
        'media_url'
    ];
    
}
