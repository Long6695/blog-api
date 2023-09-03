<?php

namespace App\Services\User\Post\Tasks;

use App\Repositories\Post\PostRepository;
use App\Services\Task;

class UpdatedPostTask extends Task
{
    protected $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    function handle(int $id, array $data)
    {
        return $this->postRepository->update($id, $data);
    }
}
