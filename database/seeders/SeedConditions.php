<?php

use Illuminate\Database\Seeder;

class SeedConditions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('conditions')->truncate(); // maak leeg

        DB::table('conditions')->insert(['id' => 1, 'name' => 'need item', 'action' => 'CHECK INVENTORY', 'description' =>
        'Check the player`s inventory on a item']);
        DB::table('conditions')->insert(['id' => 2, 'name' => 'Need npc to talk', 'action' => 'CHECK PARTY', 'description' =>
        'Check the player`s party if there is a npc with the player']);
        DB::table('conditions')->insert(['id' => 3, 'name' => 'Time check', 'action' => 'CHECK TIME', 'description' =>
        'See if its between a time like >6am and 19pm<']);
    }
}
