<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class APIListPostsTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function podemosVerPostUnicoPorApi()
    {
        $author = $this->addAuthor();

        $post = $this->addPost($author);

        $response = $this->getjson('/api/post/1');

        $response
            ->assertStatus(200)
            ->assertJson([
                'title' => $post->title,
                'body' => $post->body,
                'author_id' => $author->id
            ]);
    }
}
