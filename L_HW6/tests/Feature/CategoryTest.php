<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/news/categories');

        $response->assertStatus(200);
        $response->assertSeeText('Все Новости категории');
        $response->assertCookieMissing( 'yuy');
        $response->setPublic();
  }
}

