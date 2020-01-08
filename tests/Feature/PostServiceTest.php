<?php

namespace Tests\Feature;

use App\Services\PostService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostServiceTest extends TestCase
{
    use DatabaseMigrations;
    use RefreshDatabase;

    /** @var PostService */
    private $postService;

    public function setUp(): void
    {
       $this->postService= app()->make(PostService::class);
    }

    public function testGetPostsByCategory()
    {
        $this->assertTrue(true);
    }
}
