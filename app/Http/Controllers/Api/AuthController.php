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
        return resolve(UserSignupAction::class)->handle($data);
    }

    public function login(LoginRequest $request)
    {
        return resolve(UserLoginAction::class)->handle($request);
    }


    public function logout(Request $request)
    {
        return resolve(UserLogoutAction::class)->handle($request);
    }
}
