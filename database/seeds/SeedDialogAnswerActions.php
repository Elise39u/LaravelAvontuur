<?php

use Illuminate\Database\Seeder;

class SeedDialogAnswerActions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dialog_answer_actions')->truncate(); // maak leeg

        DB::table('dialog_answer_actions')->insert(['id' => 1, 'dialog_answer_id' => 1,
            'action' => 'OPEN DIALOG', 'action_value' => '2']);
        DB::table('dialog_answer_actions')->insert(['id' => 2, 'dialog_answer_id' => 2,
            'action' => 'OPEN DIALOG', 'action_value' => '3']);
        DB::table('dialog_answer_actions')->insert(['id' => 3, 'dialog_answer_id' => 3,
            'action' => 'CLOSE DIALOG', 'action_value' => '']);
    }
}
