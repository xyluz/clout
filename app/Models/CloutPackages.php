<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CloutPackagesItems as Items;
// use App\Models\Items;

class CloutPackages extends Model
{
    protected $fillable = [ 
        'package_name',
        'package_description',
        'package_catch_phrase',
        'package_location',
        'package_price',
        'package_sales_price',
        'package_duration',
        'package_autorenew',
        'single_page_content',
        'large_icon',
        'small_icon',
        'position',
        'display_as',
        'color'
    ];


    public function items($id){
        return Items::where('clout_package_id',$id)->get();
    }

    public function itemsCount($id){
        return Items::where('clout_package_id',$id)->count();
    }
}
