<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\PostServices;
use Illuminate\Http\Response;

class PostController extends Controller
{
    protected PostServices $postsService;

    public function __construct(PostServices $postsService)
    {
        $this->postsService = $postsService;
    }

    public function getPost(int $id): Response
    {
        return response($this->postsService->getPost($id), 200);
    }

    public function storePost(Request $request): Response
    {
        $post=$this->postsService->storePost($request);
        return response($post, 201);
    }
}
