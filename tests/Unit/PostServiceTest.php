<?php

namespace Tests\Unit;

use App\Models\Post;
use Tests\TestCase;
use App\Services\PostServices;
use Database\Seeders\authorsSeeder;
use Database\Seeders\postsSeeder;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Http\Request;

class PostServicesTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp(): void
    {
        parent::setUp();
        $this->seed([authorsSeeder::class, postsSeeder::class]);
    }

    /** @test */
    public function getPostDevuelveTodosLosPosts()
    {
        $service = new PostServices();
        $this->assertEquals($service->getPosts()->count(), 100);
    }

    /** @test */
    public function getPostDevuelveUnUnicoPost()
    {
        $newpost = Post::create([
            'title'=> 'Titulo de prueba',
            'body' => 'cuerpo',
            'author_id' => 1
        ]);
        $service = new PostServices();
        $post = $service->getPost($newpost->id);
        $this->assertEquals('Titulo de prueba', $post->title);
    }

    /** @test */
    public function storePostGuardaUnPostCorrectamente()
    {
        $request = new Request([
            'title'=> 'Titulo de prueba',
            'body' => 'cuerpo',
            'author_id' => 1
        ]);
        $service = new PostServices();
        $post = $service->storePost($request);
        $this->assertDatabaseHas('posts', $request->toArray());
    }
}
