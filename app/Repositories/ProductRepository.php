<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository extends Repository
{
    /**
     * {@inheritdoc}
    */
    public function model()
    {
        return Product::class;
    }

  

    


}