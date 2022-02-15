<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use App\Models\Author;
use App\Models\Post;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected function addAuthor()
    {
        $author= Author::create([
            'id' => 1,
            'name' => 'Alejandro Taboada',
            'email' => 'alejandro.taboada.galdo@gmail.com',
            "street"=> "Kulas Light",
            "suite"=> "Apt. 556",
            "city"=> "Gwenborough",
            "zipcode"=> "92998-3874",
            "lat"=> "-37.3159",
            "lng"=> "81.1496",
            "phone"=> "1-770-736-8031 x56442",
            "website"=> "hildegard.org",
            "company_name"=> "Romaguera-Crona",
            "catchPhrase"=> "Multi-layered client-server neural-net",
            "bs"=> "harness real-time e-markets"
        ]);
        return $author;
    }

    protected function addPost(Author $author)
    {
        $post = Post::create([
            'title' => 'Post de prueba',
            'body' => 'Prueba de integracion',
            'author_id' => $author->id
        ]);
        return $post;
    }
}
