<?php

namespace App\Repositories\User;

use App\Repositories\EloquentRepository;

class UserRepository extends EloquentRepository {
    public function getModel()
    {
        return \App\Models\User::class;
    }
}