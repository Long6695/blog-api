<?php

namespace App\Services\User\Auth\Actions;

use App\Services\Action;

class UserLogoutAction extends Action
{
    public function handle($request)
    {
        $request->user()->currentAccessToken()->delete();

        return $this->success([], 'Logout successfully');
    }
}
