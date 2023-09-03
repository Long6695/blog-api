<?php

namespace App\Repositories\Post;

use App\Repositories\EloquentRepository;

class PostRepository extends EloquentRepository {
    public function getModel()
    {
        return \App\Models\Post::class;
    }
}