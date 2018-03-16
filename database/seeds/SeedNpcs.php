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
        But i tell you lie to me and you dont get to know everything', 'Talk' => 'Hello james', 'location_id' => 12]);
        DB::table('npcs')->insert(['id' => 2, 'name' => 'Pregnant New Emma', 'foto_url' => '/img/npc/Emma.png', 'story' => 'Well hi there i am Emma<br>
        I Moved to new york like 3 years ago because on vacation i met my husband Eric<br>
        Well i hoped he is okay because he left an hour to do grocery\'s and never came back<br>
        I cant think about world where he is not included <br>
        Maby you can find him?', 'Talk' => 'Congrats Emma', 'location_id' => 20]);
        DB::table('npcs')->insert(['id' => 3, 'name' => 'Farmer dave', 'foto_url' => '/img/npc/dave.png', 'story' => 'Well hi there i am dave<br>
        I lived whole my life here in ny and liked all the way down<br>
        Maby you want to learn something about my life do you?<br>
        Or you need info about that stupid outbreak that ruined my land<br>
        But perhaps you can help me with that', 'Talk' => 'Well dave', 'location_id' => 38]);
        DB::table('npcs')->insert(['id' => 4, 'name' => 'Soldier Kane', 'foto_url' => '/img/npc/kane.png', 'story' => 'So you found us<br>
        Well life here in the base is not better and  the stupid thing we have to guard a back door<br>
        If no one guards it the base is at risk of been overrun<br>
        And no one is waiting on that so <br>
        Perhaps you can help me with that', 'Talk' => 'Okay kane?', 'location_id' => 72]);
    }
}
