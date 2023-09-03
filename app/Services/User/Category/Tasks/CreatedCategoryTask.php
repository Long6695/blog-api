<?php

namespace App\Services\User\Category\Tasks;

use App\Repositories\Category\CategoryRepository;
use App\Services\Task;

class CreatedCategoryTask extends Task
{
    protected $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    function handle(array $data)
    {
        return $this->categoryRepository->create($data);
    }
}
