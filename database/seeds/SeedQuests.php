<?php

use Illuminate\Database\Seeder;

class SeedQuests extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quests')->truncate();

        DB::table('quests')->insert(['npc_id' => 1, 'name' => 'healing time', 'description' => 'bring me one green potion',
            'item_reward' => '', 'gold' => 350, 'experience' => 150]);
        DB::table('quests')->insert(['npc_id' => 2, 'name' => 'On the road again', 'description' => 'Okay i go with you to the docks in the sub base',
            'item_reward' => '', 'gold' => 1200, 'experience' => 600]);
    }
}
