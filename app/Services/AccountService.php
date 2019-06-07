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

    public function delete($account){
        return $this->repository->delete($account);
    }

    public function details($account){
        return $this->repository->find($account);
    }

}