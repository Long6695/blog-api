<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreatedPostRequest;
use App\Http\Requests\UpdatedPostRequest;
use App\Services\User\Post\Actions\GetAllPostsPaginateAction;
use App\Services\User\Post\Tasks\CreatedPostTask;
use App\Services\User\Post\Tasks\DeletedPostByIdTask;
use App\Services\User\Post\Tasks\GetPostByIdTask;
use App\Services\User\Post\Tasks\UpdatedPostTask;

class PostController extends Controller
{
    public function index()
    {
        return resolve(GetAllPostsPaginateAction::class)->handle();
    }

    public function show($id)
    {
        return resolve(GetPostByIdTask::class)->handle($id);
    }

    public function create(CreatedPostRequest $request)
    {
        $data = $request->validated();
        return resolve(CreatedPostTask::class)->handle($data);
    }


    public function update(UpdatedPostRequest $request, $id)
    {
        $data = $request->validated();
        return resolve(UpdatedPostTask::class)->handle($id, $data);
    }

    public function destroy($id)
    {
        return resolve(DeletedPostByIdTask::class)->handle($id);
    }
}
