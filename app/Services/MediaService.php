<?php

namespace App\Services;

use App\Repositories\MediaRepository;
use Auth;


class MediaService extends BaseService
{
    /**
     * @var \App\Repositories\MediaRepository
    */
    protected $repository;
 
    /** 
     * Create a purcahse service instance.
     * 
     * @return void
    */
    public function __construct(MediaRepository $repository)
    {
        $this->repository = $repository;
    }
   
    public function create($data,$media_url){
       
        $prep = [
            'user_id'=>Auth::user()->id,
            'account_id'=>$data['brand_id'],
            'media_type'=>$data['media_type'],
            'media_title'=>$data['media_title'],
            'media_url'=>$media_url
        ];

        return $this->repository->create($prep);

    }

    public function delete($media){

        return $this->repository->delete($media);

    }

}