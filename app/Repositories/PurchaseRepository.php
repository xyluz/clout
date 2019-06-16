<?php

namespace App\Repositories;

use App\Models\Purchase;
use App\Models\CloutPackages;
use App\Models\Transaction;
use Auth;
use App\Models\Ref;
use App\Models\Presenter;

class PurchaseRepository extends Repository
{
    /**
     * {@inheritdoc}
    */
    public function model()
    {
        return Purchase::class;
    }

    public function invoiceItems($package){
        $m = new CloutPackages;
        return $m->items($package);
    }

    public function package($package){
        return CloutPackages::where('id',$package)->first();
    }

    public function create($data){
        // return $data;
        $transaction = $data['transaction'];
        
        $items = json_decode($data['items'],true);   
        foreach($items as $item){

            Purchase::create([
                'user_id'=>Auth::user()->id,
                'package_item_id'=>$item['id'],
            ]);
        }
        $amount = $data['amount'];

        Transaction::create([
            'user_id'=>Auth::user()->id,
            'amount'=> $amount,
            'ref'=>$transaction['reference'],
            'description'=>$transaction['message'],
            'status'=>$transaction['status'],
            'account_id'=>2,
            'method'=>'paystack'
        ]);

        //check if user was referred by agent
        $checkIfReferred = Presenter::where('user_id',Auth::user()->id)->first();

        if($checkIfReferred){
            //user was referred
            $checkIfReferred->amount = $amount;
            $commission = (5/100) * $amount;
            $checkIfReferred->commission = $commission;
            $checkIfReferred->save();
            
        }
      
        return "done";

    }

}