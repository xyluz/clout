<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'user_id',
        'account_id',
        'product_name',
        'product_price',
        'onsale_price',
        'product_description',
        'product_image',
        'purchase_url'
    ];
}
