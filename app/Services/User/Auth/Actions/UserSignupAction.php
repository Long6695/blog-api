<?php

namespace App\Services\User\Auth\Actions;

use App\Models\User;
use App\Services\Action\Action;

class UserSignupAction extends Action
{
    public function handle(array $data): array
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
        ]);

        $token = $user->createToken('main')->plainTextToken;

        return compact('user', 'token');
    }
}
