<?php

namespace App\Services\User\Post\Tasks;

use App\Repositories\Post\PostRepository;
use App\Services\Task;

class GetAllPostsPaginateTask extends Task {
    protected $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    function handle () {
        return $this->postRepository->getAll();
    }
}