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

    public function editContactDetails($data){
       
        $id = $data['brand_id'];

        $prep = [
            'twitter'=>$data['twitter'],
            'facebook'=>$data['facebook'],
            'instagram'=>$data['instagram'],
            'spotlight'=>$data['spotlight'],
            'linkedin'=>$data['linkedin'],
            'phone'=>$data['phone'],
            'website'=>$data['website'],
            'email'=>$data['email']
        ];

        return $this->repository->update($prep,$id);
    }

    public function editMainDetails($data,$logo){
       
        $id = $data['brand_id'];

        $prep = [
            'name'=>$data['brand_name'],
            'genre'=>$data['genre'],
            'description'=>$data['description'],
            'logo'=>$logo            
        ];

        return $this->repository->update($prep,$id);
    }

}