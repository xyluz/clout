<?php

namespace App\Services;

use App\Contracts\Repository as RepositoryContract;

class BaseService
{
    /**
     * Get the service's repository.
     * 
     * @return Repository 
    */
    public function getRepository()
    {
        return $this->repository;
    }
}