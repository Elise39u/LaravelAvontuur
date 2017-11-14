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
    }
}
