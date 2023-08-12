<?php

namespace App\Services\User\Auth\Tasks;

use App\Repositories\User\UserRepository;
use App\Services\Task;

class GetUserByEmail extends Task {
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function handler (string $email) {
        return $this->userRepository->findWhere('email', $email)->first();
    }
}