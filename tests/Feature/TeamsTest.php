<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\Team;

class TeamsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testTeamsIndexValid()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)->get('/nba');
        $response->assertStatus(200);
    }
    public function testTeamsIndexInvalid()
    {
        $response = $this->get('/nba');
        $response->assertStatus(302);
    }

    public function testRegisterValid()
    {
        $response = $this->get('/nba/register');
        $response->assertStatus(200);
    }

    public function testRegisterInvalid()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->get('/nba/register');
        $response->assertStatus(302);
    }

    public function testTeamsShowValid()
    {
      $user = factory(User::class)->create();
      $team = factory(Team::class)->create();

      $response = $this->actingAs($user)->get("/nba/teams/$team->id");
      $response->assertStatus(200);
    }
    public function testTeamsShowInvalid()
    {
      $user = factory(User::class)->create();
      $team = factory(Team::class)->create();

      $response = $this->get("/nba/teams/$team->id");
      $response->assertStatus(302);
    }
}
