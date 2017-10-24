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
    }
}
