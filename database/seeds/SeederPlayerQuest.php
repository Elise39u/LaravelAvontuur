<?php

use Illuminate\Database\Seeder;

class SeederPlayerQuest extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('player_quests')->truncate();

        DB::table('player_quests')->insert(['player_id' => 2, 'quest_id' => 1, 'tasks' => 'get a healing potion']);
    }
}
