<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class PostsSeeder extends Seeder
{
    public function run()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts/')->json();
        foreach ($response as $post) {
            Post::create([
                'id' => $post['id'],
                'title' => $post['title'],
                'body' => $post['body'],
                'author_id' => $post['userId'],
            ]);
        }
    }
}
