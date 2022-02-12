<?php

namespace App\Http\Controllers;

use App\Services\PostServices;

class PostController extends Controller
{
    protected PostServices $postService;

    public function __construct(PostServices $postsService)
    {
        $this->postsService = $postsService;
    }

    public function index()
    {
        return view('posts')->with('posts', $this->postsService->getPosts());
    }

    public function show($id)
    {
        return view('post')->with('post', $this->postsService->getPost($id));
    }
}
