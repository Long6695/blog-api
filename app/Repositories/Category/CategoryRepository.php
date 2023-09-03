<?php

namespace App\Repositories\Category;

use App\Repositories\EloquentRepository;

class CategoryRepository extends EloquentRepository {
    public function getModel()
    {
        return \App\Models\Category::class;
    }
}