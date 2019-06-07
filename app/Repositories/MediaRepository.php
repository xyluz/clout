<?php

namespace App\Repositories;

use App\Models\Media;

class MediaRepository extends Repository
{
    /**
     * {@inheritdoc}
    */
    public function model()
    {
        return Media::class;
    }

  

    


}