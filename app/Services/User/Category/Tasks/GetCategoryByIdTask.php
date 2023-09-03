<?php

namespace App\Services\User\Category\Tasks;

use App\Repositories\Category\CategoryRepository;
use App\Services\Task;

class GetCategoryByIdTask extends Task {
    protected $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function handle (int $id) {
        return $this->categoryRepository->find($id);
    }
}