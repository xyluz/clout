<?php

namespace App\Repositories;

use App\Models\Purchase;
use App\Models\CloutPackages;

class PurchaseRepository extends Repository
{
    /**
     * {@inheritdoc}
    */
    public function model()
    {
        return Purchase::class;
    }

    public function invoiceItems($package){
        $m = new CloutPackages;
        return $m->items($package);
    }

    public function package($package){
        return CloutPackages::where('id',$package)->first();
    }

}