<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Media;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\Campaign;

class Account extends Model
{
    //account type can be buiness or artist
    protected $fillable = [
        'user_id',
        'type',
        'name',
        'genre',
        'description',
        'website',
        'email',
        'instagram',
        'twitter',
        'linkedin',
        'phone',
        'facebook',
        'logo'
    ];

    public function media(){
        return $this->hasMany(Media::class);
    }

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function transactions(){
        return $this->hasMany(Transaction::class);
    }

    public function campaign(){
        return $this->hasMany(Campaign::class);
    }

    
}
