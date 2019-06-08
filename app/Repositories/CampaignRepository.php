<?php

namespace App\Repositories;

use App\Models\Campaign;

class CampaignRepository extends Repository
{    

    /**
     * {@inheritdoc}
    */
    public function model()
    {
        return Campaign::class;
    }
 
}