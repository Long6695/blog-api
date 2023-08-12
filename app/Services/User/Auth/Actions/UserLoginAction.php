<?php

namespace App\Services\User\Auth\Actions;

use Illuminate\Support\Facades\Auth;
use App\Services\Action;
use App\Services\User\Auth\Tasks\GetUserByEmail;
use Illuminate\Support\Facades\Hash;

class UserLoginAction extends Action
{
    public function handle($request)
    {
        try {
            $credentials = $request->validated();
            if (!Auth::attempt($credentials)) {
                return $this->error([], 'Provided email address or password is incorrect', 404);
            }
            $user = resolve(GetUserByEmail::class)->handler($credentials['email']);

            if (!Hash::check($request->password, $user->password, [])) {
                throw new \Exception('Error in Login');
            }

            $token = $user->createToken('authToken')->plainTextToken;

            return $this->success(['token' => $token], 'Success');
        } catch (\Exception $error) {
            return response()->json([
                'status_code' => 500,
                'message' => 'Error in Login',
                'error' => $error,
            ]);
        }
    }
}
