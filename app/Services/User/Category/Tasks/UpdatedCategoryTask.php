<?php

namespace App\Services\User\Category\Tasks;

use App\Repositories\Category\CategoryRepository;
use App\Services\Task;

class UpdatedCategoryTask extends Task
{
    protected $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    function handle(int $id, array $data)
    {
        return $this->categoryRepository->update($id, $data);
    }
}
