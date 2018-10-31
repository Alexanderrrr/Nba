<?php

use Illuminate\Database\Seeder;
use App\Team;
use App\Player;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Team::all()->each(function(Team $team) {
          $team->players()->saveMany(factory(Player::class, 5)->make());
      });
    }
}
