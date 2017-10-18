<?php

use Illuminate\Database\Seeder;

class SeedNpcs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('npcs')->truncate(); // maak leeg

        DB::table('npcs')->insert(['id' => 1, 'name' => 'New Yorker James', 'foto_url' => '/img/npc/james.png', 'story' => 'Well hello there i am James <br>
        I lived here in New york my whole life and know it better than any one <br>
        If you want to know something just ask <br>
        But i tell you lie to me and you dont get to know everything', 'location_id' => 12]);
    }
}
