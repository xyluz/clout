<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\CloutPackageItems as Items;

class CloutPackage extends Model
{
    protected $fillable = [
        'package_name',
        'package_description',
        'package_catch_phrase',
        'package_location',
        'package_price',
        'package_sales_price',
        'package_duration',
        'package_autorenew'
    ];


    public function items(){
        return $this->hasMany(Items::class);
    }
}
