<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WebPostTest extends TestCase
{
    /** @test */
    public function podemosVerListadoPosts(){
        $this->withoutExceptionHandling();

        $author= $this->addAuthor();

        $post = $this->addPost($author);

        $view = $this->get('/');

        $view->assertSee('Post de prueba');
    }

    /** @test */
    public function podemosVerPostUnico(){
        $this->withoutExceptionHandling();

        $author= $this->addAuthor();

        $post = $this->addPost($author);

        $view = $this->get('/post/1');

        $view->assertSee('Post de prueba')
            ->assertSee('Alejandro Taboada')
            ->assertSee('alejandro.taboada.galdo@gmail.com');
    }
}
