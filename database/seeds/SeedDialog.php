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
        DB::table('dialogs')->insert(['id' => 2, 'npc_id' => 1, 'story' => 'I have something that you can do for me']);
        DB::table('dialogs')->insert(['id' => 3, 'npc_id' => 1, 'story' => 'New york brooklyn of course friend']);
        DB::table('dialogs')->insert(['id' => 4, 'npc_id' => 1, 'story' => 'Bring me a green potion and i give something in return']);
    }
}
