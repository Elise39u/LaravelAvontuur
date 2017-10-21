<?php

use Illuminate\Database\Seeder;

class SeedNpcDialoug extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('npc_dialougs')->truncate(); // maak leeg

        DB::table('npc_dialougs')->insert(['id' => 1, 'npc_id' => 1, 'story' => 'What do you want friend?', 'Answer_1' => 'Is there something i can do for you?',
            'Answer_2' => 'What is the most beautiful place in new york', 'Answer_3' => 'Why is new york so good?']);
        DB::table('npc_dialougs')->insert(['id' => 2, 'npc_id' => 1, 'story' => 'Well bring me a green potion and i give something in return', 'Answer_1' => 'Okay is that it?',
            'Answer_2' => 'Well ... can that later?', 'Answer_3' => 'I don`t have the time?']);
    }
}
