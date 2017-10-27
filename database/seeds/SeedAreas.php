<?php

use Illuminate\Database\Seeder;

class SeedAreas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->truncate(); // maak leeg
        DB::table('areas')->insert(['id' => 1, 'name' => 'brooklyn']);
    }
}
