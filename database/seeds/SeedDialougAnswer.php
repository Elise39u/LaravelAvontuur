<?php

use Illuminate\Database\Seeder;

class SeedDialougAnswer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dialoug_answers')->truncate(); // maak leeg

        DB::table('dialoug_answers')->insert(['id' => 1, 'conditions_id' => NULL, 'dialoug_id' => 1, 'story' => 'What do you want friend?',
            'action' => 'Is there something i can do for you', 'value' => '']);
        DB::table('dialoug_answers')->insert(['id' => 2, 'conditions_id' => NULL, 'dialoug_id' => 1, 'story' => '',
            'action' => 'Why is New york so beautiful', 'value' => NULL]);
        DB::table('dialoug_answers')->insert(['id' => 3, 'conditions_id' => NULL, 'dialoug_id' => 1, 'story' => '',
            'action' => 'What is the best place to go out in New York', 'value' => NULL]);
    }
}
