<?php

namespace App\Http\Repositories;

use App\Http\Repositories\Impl\PostRepositoryInterface;
use App\Models\Post;

class PostRepository extends BaseRepository implements PostRepositoryInterface
{
    public function __construct(Post $post)
    {
        $this->model = $post;
    }
}
