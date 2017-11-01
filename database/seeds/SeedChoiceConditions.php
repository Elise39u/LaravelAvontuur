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

        DB::table('choice_conditions')->insert(['id' => 1, 'choice_id' => 27, 'action' => 'NEED ITEM', 'action_value' => 6]);
    }
}
