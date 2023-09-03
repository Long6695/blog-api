<?php

namespace App\Services\User\Post\Actions;

use App\Services\Action;
use App\Services\User\Post\Tasks\GetAllPostsPaginateTask;

class GetAllPostsPaginateAction extends Action {
    
    function handle ()
    {
        return resolve(GetAllPostsPaginateTask::class)->handle();
    }
}