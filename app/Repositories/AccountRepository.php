<?php

namespace App\Repositories;

use App\Models\Account;

class AccountRepository extends Repository
{

    /**
     * {@inheritdoc}
    */
    public function model()
    {
        return Account::class;
    }

    public function create($request){
       
       return Account::create([

            'user_id'=>$request['user_id'],
            'genre'=>$request['genre'],
            'name'=>$request['brand_name'],
            'type'=>$request['brand_type'],
            'description'=>$request['description']

        ]);

    }

   

    


}