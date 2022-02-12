<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function getPost(int $id)
    {
        return response(Post::find($id),200);
    }

    public function storePost(Request $request){
        $post=Post::create([
            'title' => $request->title,
            'body' => $request->body,
            'author_id' => $request->author_id,
        ]);
        return response($post,201);
    }
}
