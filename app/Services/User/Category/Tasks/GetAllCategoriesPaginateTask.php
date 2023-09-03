<?php

namespace App\Services\User\Category\Tasks;

use App\Repositories\Category\CategoryRepository;
use App\Services\Task;

class GetAllCategoriesPaginateTask extends Task {
    protected $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    function handle () {
        return $this->categoryRepository->getAll();
    }
}