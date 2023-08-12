<?php

namespace App\Services\User\Auth\Actions;

use App\Services\Action;
use Illuminate\Support\Facades\Auth;

class GetUserAction extends Action {

    public function handle()
    {
        return Auth::user();
    }
}
