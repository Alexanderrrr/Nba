<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()

    {   $user = factory(User::class)->create();
        $response = $this->actingAs($user)->get('/news');

        $response->assertStatus(200);
    }
}
