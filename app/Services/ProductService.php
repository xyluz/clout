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

      public function editProduct($data){
       
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

}