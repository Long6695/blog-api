<?php

namespace App\Repositories\Like;

use App\Repositories\EloquentRepository;

class LikeRepository extends EloquentRepository {
    public function getModel()
    {
        return \App\Models\Like::class;
    }
}