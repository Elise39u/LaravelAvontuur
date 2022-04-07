<?php

use Illuminate\Database\Seeder;

class SeederLocationConditions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('location_conditions')->truncate(); // maak leeg

        DB::table('location_conditions')->insert(['id' => 1, 'location_id' => 24, 'action' => 'NPC IN PARTY', 'action_value' => '11',
            'reward' => '<b>Marieke:</b> Do you want to go shopping? <br>
            <b>username:</b> No Marieke we need to move <br>
            <b>Marieke:</b> Ahh that is sad username']);
    }
}
