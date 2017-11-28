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
        DB::table('dialogs')->insert(['id' => 5, 'npc_id' => 1, 'story' => 'No the item is a surprise']);
        DB::table('dialogs')->insert(['id' => 6, 'npc_id' => 1, 'story' => 'Okay come back if you have one']);
        DB::table('dialogs')->insert(['id' => 7, 'npc_id' => 1, 'story' => 'Well all the places to go out and the monument and i hope you know the rest']);
        DB::table('dialogs')->insert(['id' => 8, 'npc_id' => 1, 'story' => 'pfff don`t talk to me anymore']);
        DB::table('dialogs')->insert(['id' => 9, 'npc_id' => 1, 'story' => 'Well who doesn`t like New york']);

        DB::table('dialogs')->insert(['id' => 10, 'npc_id' => 2, 'story' => 'Well how can i help you before i get birth']);
        DB::table('dialogs')->insert(['id' => 11, 'npc_id' => 2, 'story' => 'I don`t talk to you unless.....']);
        DB::table('dialogs')->insert(['id' => 12, 'npc_id' => 2, 'story' => 'Now i talk only to Coach Marieke']);
    }
}
