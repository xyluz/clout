<?php

namespace App\Services;

use App\Repositories\CampaignRepository;
use Auth;


class CampaignService extends BaseService
{
    /**
     * @var \App\Repositories\CampaignRepository
    */
    protected $repository;
 
    /** 
     * Create a purcahse service instance.
     * 
     * @return void
    */
    public function __construct(CampaignRepository $repository)
    {
        $this->repository = $repository;
    }

    public function create($data){
            
        $prep = [
            'user_id'=>Auth::user()->id,
            'account_id'=>$data['account_id'],
            'campaign_name'=>$data['campaign_name'],
            'start_date'=>$data['start_date'],
            'campaign_package'=>$data['campaign_package'],
            'campaign_status'=> 'pending',
            'campaign_description'=>$data['campaign_description'],
            'media'=>$data['media']
        ];

        Mail::to(Auth::user())->queue(new CampaignCreatedMail($prep));


        return $this->repository->create($prep);

    }

    public function delete($product){
        return $this->repository->delete($product);
    }

}