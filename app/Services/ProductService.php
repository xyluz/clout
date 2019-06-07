<?php

namespace App\Services;

use App\Repositories\ProductRepository;
use Auth;


class ProductService extends BaseService
{
    /**
     * @var \App\Repositories\ProductRepository
    */
    protected $repository;
 
    /** 
     * Create a purcahse service instance.
     * 
     * @return void
    */
    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }

    public function create($data,$product_image){
       
        $prep = [
            'user_id'=>Auth::user()->id,
            'account_id'=>$data['brand_id'],
            'product_name'=>$data['product_name'],
            'product_price'=>$data['product_price'],
            'product_image'=>$product_image
        ];

        return $this->repository->create($prep);

    }

    public function delete($product){
        return $this->repository->delete($product);
    }

}