<?php

namespace App\Repositories;

use App\Models\Account;

use Illuminate\Support\Facades\Mail;
use App\Mail\NewBrandCreatedMail;

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
       
       $account = Account::create([

            'user_id'=>$request['user_id'],
            'genre'=>$request['genre'],
            'name'=>$request['brand_name'],
            'phone'=>$request['phone'],
            'type'=>$request['brand_type'],
            'description'=>$request['description']
        ]);

        Mail::to(Auth::user())->queue(new NewBrandCreatedMail($account));
    }

    public function products($account){
       $acc = new Account;
        return $acc->products($account);
    }

    public function media($account){
        $acc = new Account;
      
        return $acc->media($account);
    }

   

    


}