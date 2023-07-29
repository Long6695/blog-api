<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignupRequest;
use App\Services\User\Auth\Actions\UserLoginAction;
use App\Services\User\Auth\Actions\UserLogoutAction;
use App\Services\User\Auth\Actions\UserSignupAction;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signup(SignupRequest $request)
    {
        $data = $request->validated();
        $response = resolve(UserSignupAction::class)->handle($data);
        return response($response, 201);
    }

    public function login(LoginRequest $request)
    {
        $credential = $request->validated();
        $response = resolve(UserLoginAction::class)->handle($credential);
        return response($response, 200);
    }


    public function logout(Request $request)
    {
        $response = resolve(UserLogoutAction::class)->handle($request);
        return response($response, 204);
    }
}
