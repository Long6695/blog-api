<?php

namespace App\Services\User\Post\Tasks;

use App\Repositories\Post\PostRepository;
use App\Services\Task;

class DeletedPostByIdTask extends Task {
    protected $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    function handle (int $id) {
        return $this->postRepository->delete($id);
    }
}