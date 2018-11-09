<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\Team;
use App\Player;
use App\Comment;


class DatabaseTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserDatabaseValid()
    {
      $users = factory(User::class)->create();
      $this->assertDatabaseHas('users',[
          'id' => $users->id,
      ]);
    }
    public function testTeamDatabaseValid()
    {
      $team = factory(Team::class)->create();
      $this->assertDatabaseHas('teams',[
          'id' => $team->id,
          'name' => $team->name,
      ]);
    }
    public function testPlayerDatabaseValid()
    {
      $team = factory(Team::class)->create();
      $player = factory(Player::class)->create([
        'team_id' => $team->id
      ]);
      $this->assertDatabaseHas('players',[
          'team_id' => $team->id,
          'first_name' => $player->first_name,
      ]);
    }
    public function testCommentDatabaseValid()
    {
      $user = factory(User::class)->create();

      $team = factory(Team::class)->create();

      $comment = factory(Comment::class, 9)->create([
          'user_id' => $user->id,
          'team_id' => $team->id
      ]);

      $this->assertEquals(9, $comment->count());

    }
}
