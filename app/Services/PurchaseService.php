<?php

namespace App\Services;

use App\Repositories\PurchaseRepository;
use App\Models\CloutPackagesItems;
use App\Models\CloutPackages;

class PurchaseService extends BaseService
{
    /**
     * @var \App\Repositories\PurchaseRepository
    */
    protected $repository;
 
    /** 
     * Create a purcahse service instance.
     * 
     * @return void
    */
    public function __construct(PurchaseRepository $repository)
    {
        $this->repository = $repository;
    }

    public function packageItems($package){
       return $this->repository->invoiceItems($package);
    }

    public function package($package){
        return $this->repository->package($package);
    }
 
    public function registerPurchase($data){ 

        return $this->repository->create($data); 
        
    }

}