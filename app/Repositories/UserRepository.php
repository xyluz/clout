<?php

namespace App\Repositories;


use Auth;

class UserRepository extends Repository
{
    /**
     * {@inheritdoc}
    */
    public function model()
    {
        return User::class;
    }

    


}