<?php

namespace App\Services\User\Post\Tasks;

use App\Repositories\Post\PostRepository;
use App\Services\Task;

class GetPostByIdTask extends Task {
    protected $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function handle (int $id) {
        return $this->postRepository->find($id);
    }
}