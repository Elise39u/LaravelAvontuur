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
        DB::table('dialog_answer_actions')->insert(['id' => 4, 'dialog_answer_id' => 4,
            'action' => 'OPEN DIALOG', 'action_value' => '4']);
        DB::table('dialog_answer_actions')->insert(['id' => 5, 'dialog_answer_id' => 5,
            'action' => 'CLOSE DIALOG', 'action_value' => '']);
        DB::table('dialog_answer_actions')->insert(['id' => 6, 'dialog_answer_id' => 6,
            'action' => 'OPEN DIALOG', 'action_value' => '5']);
        DB::table('dialog_answer_actions')->insert(['id' => 7, 'dialog_answer_id' => 7,
            'action' => 'OPEN DIALOG', 'action_value' => '6']);
        DB::table('dialog_answer_actions')->insert(['id' => 8, 'dialog_answer_id' => 8,
            'action' => 'OPEN DIALOG', 'action_value' => '7']);
        DB::table('dialog_answer_actions')->insert(['id' => 9, 'dialog_answer_id' => 9,
            'action' => 'OPEN DIALOG', 'action_value' => '8']);
        DB::table('dialog_answer_actions')->insert(['id' => 10, 'dialog_answer_id' => 10,
            'action' => 'OPEN DIALOG', 'action_value' => '9']);
        DB::table('dialog_answer_actions')->insert(['id' => 11, 'dialog_answer_id' => 11,
            'action' => 'CLOSE DIALOG', 'action_value' => '']);
        DB::table('dialog_answer_actions')->insert(['id' => 12, 'dialog_answer_id' => 12,
            'action' => 'CLOSE DIALOG, START QUEST', 'action_value' => '']);
        DB::table('dialog_answer_actions')->insert(['id' => 13, 'dialog_answer_id' => 13,
            'action' => 'CLOSE DIALOG', 'action_value' => '']);
        DB::table('dialog_answer_actions')->insert(['id' => 14, 'dialog_answer_id' => 14,
            'action' => 'CLOSE DIALOG', 'action_value' => '']);
        DB::table('dialog_answer_actions')->insert(['id' => 15, 'dialog_answer_id' => 15,
            'action' => 'CLOSE DIALOG', 'action_value' => '']);

        DB::table('dialog_answer_actions')->insert(['id' => 16, 'dialog_answer_id' => 16,
            'action' => 'OPEN DIALOG', 'action_value' => '11']);
        DB::table('dialog_answer_actions')->insert(['id' => 17, 'dialog_answer_id' => 17,
            'action' => 'OPEN DIALOG', 'action_value' => '']);
        DB::table('dialog_answer_actions')->insert(['id' => 18, 'dialog_answer_id' => 18,
            'action' => 'OPEN DIALOG', 'action_value' => '']);
        DB::table('dialog_answer_actions')->insert(['id' => 19, 'dialog_answer_id' => 19,
            'action' => 'OPEN DIALOG', 'action_value' => '12']);
        DB::table('dialog_answer_actions')->insert(['id' => 20, 'dialog_answer_id' => 20,
            'action' => 'CLOSE DIALOG', 'action_value' => '']);
        DB::table('dialog_answer_actions')->insert(['id' => 21, 'dialog_answer_id' => 21,
            'action' => 'OPEN DIALOG', 'action_value' => '']);
        DB::table('dialog_answer_actions')->insert(['id' => 22,  'dialog_answer_id' => 22,
            'action' => 'OPEN DIALOG', 'action_value' => '']);
        DB::table('dialog_answer_actions')->insert(['id' => 23,  'dialog_answer_id' => 23,
            'action' => 'CLOSE DIALOG', 'action_value' => '']);
    }
}
