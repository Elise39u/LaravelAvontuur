<?php

use Illuminate\Database\Seeder;

class SeedDialogAnswer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dialog_answers')->truncate(); // maak leeg

        DB::table('dialog_answers')->insert(['id' => 1, 'dialog_id' => 1,
            'button_title' => 'Is there something i can do for you']);
        DB::table('dialog_answers')->insert(['id' => 2, 'dialog_id' => 1,
            'button_title' => 'Why is New york so beautiful']);
        DB::table('dialog_answers')->insert(['id' => 3, 'dialog_id' => 1,
            'button_title' => 'What is the best place to go out in New York']);
        DB::table('dialog_answers')->insert(['id' => 4, 'dialog_id' => 2,
            'button_title' => 'Okay what is the exercise?']);
        DB::table('dialog_answers')->insert(['id' => 5, 'dialog_id' => 2,
            'button_title' => 'Well i don`t have time']);
        DB::table('dialog_answers')->insert(['id' => 6, 'dialog_id' => 4,
            'button_title' => 'Can you tell what the item is?'])
        ;DB::table('dialog_answers')->insert(['id' => 7, 'dialog_id' => 4,
            'button_title' => 'Okay i go search for it']);
        DB::table('dialog_answers')->insert(['id' => 8, 'dialog_id' => 3,
            'button_title' => 'Well we are in brooklyn so what is the beautiful thing here than']);
        DB::table('dialog_answers')->insert(['id' => 9, 'dialog_id' => 3,
            'button_title' => 'Is it not Manhattan or you don`t agree']);
        DB::table('dialog_answers')->insert(['id' => 10, 'dialog_id' => 3,
            'button_title' => 'Well i don`t like new york so do you know something about this outbreak']);
        DB::table('dialog_answers')->insert(['id' => 11, 'dialog_id' => 3,
            'button_title' => 'Well this was a waste']);
        DB::table('dialog_answers')->insert(['id' => 12, 'dialog_id' => 5,
            'button_title' => 'Okay']);
        DB::table('dialog_answers')->insert(['id' => 13, 'dialog_id' => 7,
            'button_title' => 'Okay than']);
        DB::table('dialog_answers')->insert(['id' => 14, 'dialog_id' => 8,
            'button_title' => 'Okay than']);
        DB::table('dialog_answers')->insert(['id' => 15, 'dialog_id' => 9,
            'button_title' => 'Okay than']);

        DB::table('dialog_answers')->insert(['id' => 16, 'dialog_id' => 10, 'button_title' => 'When do you give birth?']);
        DB::table('dialog_answers')->insert(['id' => 17, 'dialog_id' => 10, 'button_title' => 'Ány friends?']);
        DB::table('dialog_answers')->insert(['id' => 18, 'dialog_id' => 10, 'button_title' => 'How is life before the outbreak?']);
        DB::table('dialog_answers')->insert(['id' => 19, 'dialog_id' => 11, 'button_title' => 'Unless what?']);
        DB::table('dialog_answers')->insert(['id' => 20, 'dialog_id' => 11, 'button_title' => 'Okay bye']);
        DB::table('dialog_answers')->insert(['id' => 21, 'dialog_id' => 12, 'button_title' => 'Okay Where can i find here?']);
        DB::table('dialog_answers')->insert(['id' => 22, 'dialog_id' => 12, 'button_title' => 'Well she is with me',
        'condition' => 'NEED NPC', 'condition_value' => '']);
        DB::table('dialog_answers')->insert(['id' => 23, 'dialog_id' => 12, 'button_title' => 'We talk later']);
    }
}
