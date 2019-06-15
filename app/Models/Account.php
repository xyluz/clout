<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Media;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\Campaign;
use App\Models\PageVisits;

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
        'logo',
        'address',
        'spotlight'
    ];

    public function media($brand_id){
        return Media::where('account_id',$brand_id);
    }

    public function products($brand_id){
        return Product::where('account_id',$brand_id);
    }

    public function transactions(){
        return $this->hasMany(Transaction::class);
    }

    public function campaign(){
        return $this->hasMany(Campaign::class);
    }

    public function visits(){
        return $this->hasMany(PageVisits::class);
    }

    
}
