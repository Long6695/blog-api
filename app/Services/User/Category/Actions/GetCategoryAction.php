<?php

namespace App\Services\User\Category\Actions;

use App\Services\Action;
use App\Services\Category\Tasks\GetCategoryByIdTask;

class GetCategoryAction extends Action
{

    function handle(int $id)
    {
        $category = resolve(GetCategoryByIdTask::class)->handle($id);

        $this->success($category, 'Success');
    }
}
