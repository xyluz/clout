<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CloutPackages;

class CloutPackagesItems extends Model
{
    protected $fillable = [
        'clout_package_id',
        'package_item_name',
        'package_item_description',
        'package_item_unitprice',
        'package_item_salesprice',
        'package_item_available_count'
    ];

    public function package(){
        return $this->belongsTo(CloutPackages::class);
    }
}
