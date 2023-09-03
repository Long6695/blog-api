<?php

namespace App\Services\User\Post\Actions;

use App\Services\Action;
use App\Services\Post\Tasks\CreatedPostTask;

class CreatePostAction extends Action {

    function handle (array $data) 
    {
        $post = resolve(CreatedPostTask::class)->handle($data);

        return $this->success($post, 'Created post successfully');
    }
}