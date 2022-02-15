<?php

namespace App\Services;

use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class PostServices
{
    public function getPosts()
    {
        return Post::all();
    }

    public function getPost(int $id)
    {
        return Post::find($id)->load('author');
    }

    public function storePost(Request $request)
    {
        $post=Post::create([
            'title' => $request->title,
            'body' => $request->body,
            'author_id' => $request->author_id,
        ]);
        return $post;
    }
}
