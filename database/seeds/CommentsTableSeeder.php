<?php

use Illuminate\Database\Seeder;
use App\Team;
use App\Comment;
use App\User;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      //   Team::all()->each(function (Team $team) {
      //   $team->comments()->saveMany(factory(Comment::class,10)->create([
      //     'user_id' => $this->getRandomUserId()
      //     ])->make());
      // });
      # Lets create 150 random phones
        factory(Comment::class, 5)->create([
            'user_id' => $this->getRandomUserId(),
            'team_id' => $this->getRandomTeamId()
            ]        
        );


    }
    private function getRandomUserId() {
        $user = User::inRandomOrder()->first();
        return $user->id;
    }
    private function getRandomTeamId() {
        $team = Team::inRandomOrder()->first();
        return $team->id;
    }


}
