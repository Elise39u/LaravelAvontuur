<?php
namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
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
            'item_reward' => '59', 'gold' => 350, 'experience' => 150]);
        DB::table('quests')->insert(['npc_id' => 2, 'name' => 'On the road again', 'description' => 'Okay i go with you to the docks in the sub base',
            'item_reward' => '', 'gold' => 1200, 'experience' => 600]);
        DB::table('quests')->insert(['npc_id' => 11, 'name' => 'Coaching Time', 'description' => 'Coach Marieke Joins you',
             'item_reward' => '', 'gold' => 1200, 'experience' => 600, 'reward' => '', 'condition' => 'INSERT NPC INTO PARTY',
            'condition_value' => 11]);
    }
}
