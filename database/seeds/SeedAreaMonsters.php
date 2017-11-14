<?php

use Illuminate\Database\Seeder;

class SeedAreaMonsters extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('area_monsters')->truncate(); // maak leeg

        DB::table('area_monsters')->insert(['area_id' => 1, 'monster_id' => 1]);
        DB::table('area_monsters')->insert(['area_id' => 1, 'monster_id' => 2]);
        DB::table('area_monsters')->insert(['area_id' => 1, 'monster_id' => 3]);
        DB::table('area_monsters')->insert(['area_id' => 1, 'monster_id' => 4]);
        DB::table('area_monsters')->insert(['area_id' => 1, 'monster_id' => 5]);
    }
}
