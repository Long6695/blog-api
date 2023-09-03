<?php

namespace App\Services\User\Post\Actions;

use App\Services\Action;
use App\Services\Post\Tasks\GetPostByIdTask;

class GetPostAction extends Action
{

    function handle(int $id)
    {
        $post = resolve(GetPostByIdTask::class)->handle($id);

        $this->success($post, 'Success');
    }
}
