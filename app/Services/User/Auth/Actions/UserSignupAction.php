<?php

namespace App\Services\User\Auth\Actions;

use App\Services\Action;
use App\Services\User\Auth\Tasks\CreateNewUser;
use App\Services\User\Auth\Tasks\GetUserByEmail;
use Illuminate\Support\Facades\Hash;

class UserSignupAction extends Action
{
    public function handle(array $data)
    {
        $user = resolve(GetUserByEmail::class)->handle($data['email']);

        if (!empty($user)) {
            return $this->error([], 'User has registered', 400);
        }

        $user = resolve(CreateNewUser::class)->handler([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $token = $user->createToken('main')->plainTextToken;

        return $this->success(compact('user', 'token'), 'Register successfully');
    }
}
