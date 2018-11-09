<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class LoginTest extends TestCase
{
    /**
     * A basic test example.z fgfdsqweQW
     *
     * @return void
     */
    public function testLoginValid()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
    public function testLoginInvalid()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)->get('/');
        $response->assertStatus(302);
    }
}
