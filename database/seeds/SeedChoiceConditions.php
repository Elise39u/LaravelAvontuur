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
        DB::table('choice_conditions')->insert(['choice_id' => 54, 'action' => 'NEED ITEM', 'action_value' => 5]);
        DB::table('choice_conditions')->insert(['choice_id' => 56, 'action' => 'NEED ITEM', 'action_value' => 7]);
        DB::table('choice_conditions')->insert(['choice_id' => 57, 'action' => 'NEED ITEM', 'action_value' => 100]);
    }
}
