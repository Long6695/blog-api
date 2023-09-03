<?php

namespace App\Services\User\Post\Tasks;

use App\Repositories\Post\PostRepository;
use App\Services\Task;

class CreatedPostTask extends Task
{
    protected $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    function handle(array $data)
    {
        return $this->postRepository->create($data);
    }
}
