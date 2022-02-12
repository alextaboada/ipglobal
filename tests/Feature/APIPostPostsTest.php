<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class APIPostPostsTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function podemosCrearPostApi(){
        $author= $this->addAuthor();

        $response = $this->postJson(route('api.create'),[
            'title' => 'Titulo de prueba',
            'body' => 'Cuerpo de la prueba',
            'author_id' => $author->id
        ]);
        $response->assertCreated();
    }
}
