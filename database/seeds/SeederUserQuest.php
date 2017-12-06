<?php

use Illuminate\Database\Seeder;

class SeederUserQuest extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_quests')->truncate();

        DB::table('user_quests')->insert(['player_id' => 2, 'quest_id' => 1, 'tasks' => 'get a healing potion']);
        DB::table('user_quests')->insert(['player_id' => 2, 'quest_id' => 2, 'tasks' => 'Bring me to the docks of the sub base']);
        DB::table('user_quests')->insert(['player_id' => 1, 'quest_id' => 2, 'tasks' => 'Bring me to the docks of the sub base']);
    }
}
