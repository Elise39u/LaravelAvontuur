<?php

use Illuminate\Database\Seeder;

class SeedItems extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->truncate(); // maak leeg

        DB::table('items')->insert(['item_type_id' => 1]);
        DB::table('items')->insert(['item_type_id' => 2]);
        DB::table('items')->insert(['item_type_id' => 3]);
        DB::table('items')->insert(['item_type_id' => 4]);
        DB::table('items')->insert(['item_type_id' => 5]);
        DB::table('items')->insert(['item_type_id' => 6]);
        DB::table('items')->insert(['item_type_id' => 7]);
        DB::table('items')->insert(['item_type_id' => 8]);
        DB::table('items')->insert(['item_type_id' => 9]);
        DB::table('items')->insert(['item_type_id' => 10]);
    }
}
