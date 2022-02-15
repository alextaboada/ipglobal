<?php

namespace Tests\Unit;

use Database\Seeders\authorsSeeder;
use Database\Seeders\postsSeeder;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class SeederTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function seederCargaDatosAutoresCorrectamente()
    {
        $this->seed(authorsSeeder::class);

        $this->assertDatabaseCount('authors', 10);
    }
    /** @test */
    public function seederCargaDatosPostsCorrectamente()
    {
        $this->seed([authorsSeeder::class,postsSeeder::class]);

        $this->assertDatabaseCount('posts', 100);
    }
}
