<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Models\Post;

class PostController extends Controller
{
    public function getPost(int $id)
    {
        return response(Post::find($id),200);
    }
}
