<?php

namespace App\Services\User\Category\Actions;

use App\Services\Action;
use App\Services\User\Category\Tasks\GetAllCategoriesPaginateTask;

class GetAllCategoriesPaginateAction extends Action {
    
    function handle ()
    {
        return resolve(GetAllCategoriesPaginateTask::class)->handle();
    }
}