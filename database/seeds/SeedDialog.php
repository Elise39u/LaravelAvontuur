<?php

use Illuminate\Database\Seeder;

class SeedDialog extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dialogs')->truncate(); // maak leeg

        DB::table('dialogs')->insert(['id' => 1, 'npc_id' => 1, 'story' => 'what do you want friend']);
    }
}
