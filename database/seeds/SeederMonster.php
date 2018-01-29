<?php

use Illuminate\Database\Seeder;

class SeederMonster extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('monsters')->truncate(); // maak leeg

        DB::table('monsters')->insert(['monster_type_id' => 1, 'inventory_id' => NULL]);
        DB::table('monsters')->insert(['monster_type_id' => 2, 'inventory_id' => NULL]);
        DB::table('monsters')->insert(['monster_type_id' => 3, 'inventory_id' => NULL]);
        DB::table('monsters')->insert(['monster_type_id' => 4, 'inventory_id' => NULL]);
        DB::table('monsters')->insert(['monster_type_id' => 5, 'inventory_id' => 4]);

        DB::table('monsters')->insert(['monster_type_id' => 6, 'inventory_id' => 5]);
        DB::table('monsters')->insert(['monster_type_id' => 7, 'inventory_id' => NULL]);
        DB::table('monsters')->insert(['monster_type_id' => 8, 'inventory_id' => NULL]);
        DB::table('monsters')->insert(['monster_type_id' => 9, 'inventory_id' => NULL]);
        DB::table('monsters')->insert(['monster_type_id' => 10, 'inventory_id' => NULL]);
        DB::table('monsters')->insert(['monster_type_id' => 11, 'inventory_id' => NULL]);
        DB::table('monsters')->insert(['monster_type_id' => 12, 'inventory_id' => NULL]);
    }
}
