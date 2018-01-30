<?php

use Illuminate\Database\Seeder;

class SeedChoiceConditions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('choice_conditions')->truncate();

        DB::table('choice_conditions')->insert(['choice_id' => 27, 'action' => 'NEED ITEM', 'action_value' => 6]);
        DB::table('choice_conditions')->insert(['choice_id' => 55, 'action' => 'NEED ITEM', 'action_value' => 5]);
        DB::table('choice_conditions')->insert(['choice_id' => 57, 'action' => 'NEED ITEM', 'action_value' => 7]);
        DB::table('choice_conditions')->insert(['choice_id' => 58, 'action' => 'NEED ITEM', 'action_value' => 8]);
        DB::table('choice_conditions')->insert(['choice_id' => 66, 'action' => 'NEED ITEM', 'action_value' => '']);
        DB::table('choice_conditions')->insert(['choice_id' => 80, 'action' => 'NEED ITEM', 'action_value' => '']);
        DB::table('choice_conditions')->insert(['choice_id' => 94, 'action' => 'NEED ITEM', 'action_value' => 36]);
        DB::table('choice_conditions')->insert(['choice_id' => 100, 'action' => 'NEED ITEM', 'action_value' => '']);
        DB::table('choice_conditions')->insert(['choice_id' => 103, 'action' => 'NEED ITEM', 'action_value' => 35]);
        DB::table('choice_conditions')->insert(['choice_id' => 105, 'action' => 'NEED ITEM', 'action_value' => 34]);
        DB::table('choice_conditions')->insert(['choice_id' => 113, 'action' => 'NEED ITEM', 'action_value' => '']);
        DB::table('choice_conditions')->insert(['choice_id' => 116, 'action' => 'NEED ITEM', 'action_value' => 37]);
    }
}
