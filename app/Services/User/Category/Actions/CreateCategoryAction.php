<?php

namespace App\Services\User\Category\Actions;

use App\Services\Action;
use App\Services\Category\Tasks\CreatedCategoryTask;

class CreateCategoryAction extends Action {

    function handle (array $data) 
    {
        $post = resolve(CreatedCategoryTask::class)->handle($data);

        return $this->success($post, 'Created category successfully');
    }
}