<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreatedCategoryRequest;
use App\Http\Requests\UpdatedCategoryRequest;
use App\Services\User\Category\Actions\GetAllCategoriesPaginateAction;
use App\Services\User\Category\Tasks\CreatedCategoryTask;
use App\Services\User\Category\Tasks\DeletedCategoryByIdTask;
use App\Services\User\Category\Tasks\GetCategoryByIdTask;
use App\Services\User\Category\Tasks\UpdatedCategoryTask;

class CategoryController extends Controller
{
    public function index()
    {
        return resolve(GetAllCategoriesPaginateAction::class)->handle();
    }

    public function show($id)
    {
        return resolve(GetCategoryByIdTask::class)->handle($id);
    }

    public function create(CreatedCategoryRequest $request)
    {
        $data = $request->validated();
        return resolve(CreatedCategoryTask::class)->handle($data);
    }


    public function update(UpdatedCategoryRequest $request, $id)
    {
        $data = $request->validated();
        return resolve(UpdatedCategoryTask::class)->handle($id, $data);
    }

    public function destroy($id)
    {
        return resolve(DeletedCategoryByIdTask::class)->handle($id);
    }
}
