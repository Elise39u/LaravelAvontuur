<?php
namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
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

        // Npc 1
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

        // Npc 2
        DB::table('dialog_answers')->insert(['id' => 16, 'dialog_id' => 10, 'button_title' => 'When do you give birth?']);
        DB::table('dialog_answers')->insert(['id' => 17, 'dialog_id' => 10, 'button_title' => 'Ány friends?']);
        DB::table('dialog_answers')->insert(['id' => 18, 'dialog_id' => 10, 'button_title' => 'How is life before the outbreak?']);
        DB::table('dialog_answers')->insert(['id' => 19, 'dialog_id' => 11, 'button_title' => 'Unless what?']);
        DB::table('dialog_answers')->insert(['id' => 20, 'dialog_id' => 11, 'button_title' => 'Okay bye']);
        DB::table('dialog_answers')->insert(['id' => 21, 'dialog_id' => 12, 'button_title' => 'Okay Where can i find here?']);
        DB::table('dialog_answers')->insert(['id' => 22, 'dialog_id' => 12, 'button_title' => 'Well she is with me',
        'condition' => 'NEED NPC', 'condition_value' => 11]);
        DB::table('dialog_answers')->insert(['id' => 23, 'dialog_id' => 12, 'button_title' => 'We talk later']);
        DB::table('dialog_answers')->insert(['id' => 24, 'dialog_id' => 13, 'button_title' => 'How can i call her without a phone number']);
        DB::table('dialog_answers')->insert(['id' => 25, 'dialog_id' => 13, 'button_title' => 'I would look for her']);
        DB::table('dialog_answers')->insert(['id' => 26, 'dialog_id' => 14, 'button_title' => 'perhaps i have her phone number']);
        DB::table('dialog_answers')->insert(['id' => 27, 'dialog_id' => 14, 'button_title' => 'I am leaving now']);
        DB::table('dialog_answers')->insert(['id' => 28, 'dialog_id' => 15, 'button_title' => 'Okay you got me Emma']);
        DB::table('dialog_answers')->insert(['id' => 29, 'dialog_id' => 16, 'button_title' => 'How close were you three']);
        DB::table('dialog_answers')->insert(['id' => 30, 'dialog_id' => 16, 'button_title' => 'So i leave now because i feel a bit sick']);
        DB::table('dialog_answers')->insert(['id' => 31, 'dialog_id' => 17, 'button_title' => 'Okay see you later then']);

        #npc 3
        DB::table('dialog_answers')->insert(['id' => 32, 'dialog_id' => 18, 'button_title' => 'City boy.... how do you know?']);
        DB::table('dialog_answers')->insert(['id' => 33, 'dialog_id' => 18, 'button_title' => 'City boy Okay do you need help']);
        DB::table('dialog_answers')->insert(['id' => 34, 'dialog_id' => 18, 'button_title' => 'Well i leave now']);
        DB::table('dialog_answers')->insert(['id' => 35, 'dialog_id' => 19, 'button_title' => 'So what then you dress the same']);
        DB::table('dialog_answers')->insert(['id' => 36, 'dialog_id' => 19, 'button_title' => 'Guess i`m not needed']);
        DB::table('dialog_answers')->insert(['id' => 37, 'dialog_id' => 20, 'button_title' => 'Acutely no']);
        DB::table('dialog_answers')->insert(['id' => 38, 'dialog_id' => 21, 'button_title' => 'Why do you keep saying city boy']);
        DB::table('dialog_answers')->insert(['id' => 39, 'dialog_id' => 21, 'button_title' => 'Okay bye than']);
        DB::table('dialog_answers')->insert(['id' => 40, 'dialog_id' => 22, 'button_title' => 'Until we meet again and good luck futher']);
    }
}
