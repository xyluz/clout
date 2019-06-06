<?php

namespace App\Services;

use App\Repositories\AccountRepository;


class AccountService extends BaseService
{
    /**
     * @var \App\Repositories\AccountRepository
    */
    protected $repository;
 
    /** 
     * Create a purcahse service instance.
     * 
     * @return void
    */
    public function __construct(AccountRepository $repository)
    {
        $this->repository = $repository;
    }

    public function create($data){
        
        return $this->repository->create($data);
    }

}