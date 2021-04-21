<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private $repository;

    public function __construct(Post $post)
    {
        $this->repository = $post;
    }

    public function posts(){
        $post = $this->repository->latest()->get();

        return PostResource::collection($post);
    }
}
