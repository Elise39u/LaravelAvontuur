<?php
namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
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

        //Area 15/1
        DB::table('monsters')->insert(['monster_type_id' => 1, 'inventory_id' => NULL]);
        DB::table('monsters')->insert(['monster_type_id' => 2, 'inventory_id' => NULL]);
        DB::table('monsters')->insert(['monster_type_id' => 3, 'inventory_id' => NULL]);
        DB::table('monsters')->insert(['monster_type_id' => 4, 'inventory_id' => NULL]);
        DB::table('monsters')->insert(['monster_type_id' => 5, 'inventory_id' => 4]);

        //Area 15/2
        DB::table('monsters')->insert(['monster_type_id' => 6, 'inventory_id' => 5]);
        DB::table('monsters')->insert(['monster_type_id' => 7, 'inventory_id' => NULL]);
        DB::table('monsters')->insert(['monster_type_id' => 8, 'inventory_id' => NULL]);
        DB::table('monsters')->insert(['monster_type_id' => 9, 'inventory_id' => NULL]);
        DB::table('monsters')->insert(['monster_type_id' => 10, 'inventory_id' => NULL]);
        DB::table('monsters')->insert(['monster_type_id' => 11, 'inventory_id' => NULL]);
        DB::table('monsters')->insert(['monster_type_id' => 12, 'inventory_id' => NULL]);

        //Area 15/3
        DB::table('monsters')->insert(['monster_type_id' => 13, 'inventory_id' => 6]);
        DB::table('monsters')->insert(['monster_type_id' => 14, 'inventory_id' => NULL]);
        DB::table('monsters')->insert(['monster_type_id' => 15, 'inventory_id' => NULL]);
        DB::table('monsters')->insert(['monster_type_id' => 16, 'inventory_id' => NULL]);
        DB::table('monsters')->insert(['monster_type_id' => 17, 'inventory_id' => NULL]);
        DB::table('monsters')->insert(['monster_type_id' => 18, 'inventory_id' => NULL]);
        DB::table('monsters')->insert(['monster_type_id' => 19, 'inventory_id' => NULL]);
    }
}
