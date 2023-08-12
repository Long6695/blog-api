<?php

namespace App\Services\User\Auth\Tasks;

use App\Repositories\User\UserRepository;
use App\Services\Task;

class CreateNewUser extends Task {
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function handler ($data) {
        return $this->userRepository->create($data);
    }
}