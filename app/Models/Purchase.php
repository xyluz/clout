<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CloutPackagesItems;

class Purchase extends Model
{ 
    protected $fillable = [
        'user_id',
        'package_item_id'      
    ];

    public function details(){
        return CloutPackagesItems::where('clout_package_id',$this->package_item_id);
    }
}
