<?php

namespace App\Services\User\Auth\Actions;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Services\Action\Action;
use Illuminate\Support\Facades\Hash;

class UserLoginAction extends Action
{
    public function handle(array $data): array
    {
        if (!Auth::attempt($data)) {
            return response([
                'message' => 'Provided email address or password is incorrect',
            ]);
        }
        $user = User::where('email', $data['email'])->first();
        
        if (!$user || !Hash::check($data['password'], $user->password)) {
            return response([
                'message' => 'Bad Request'
            ], 401);
        }

        $token = $user->createToken('main')->plainTextToken;

        return compact('user', 'token');
    }
}
