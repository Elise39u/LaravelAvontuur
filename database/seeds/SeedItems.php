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
        DB::table('items')->insert(['item_type_id' => 11]);
        DB::table('items')->insert(['item_type_id' => 12]);
        DB::table('items')->insert(['item_type_id' => 13]);
        DB::table('items')->insert(['item_type_id' => 14]);
        DB::table('items')->insert(['item_type_id' => 15]);
        DB::table('items')->insert(['item_type_id' => 16]);
        DB::table('items')->insert(['item_type_id' => 17]);
        DB::table('items')->insert(['item_type_id' => 18]);
        DB::table('items')->insert(['item_type_id' => 19]);
        DB::table('items')->insert(['item_type_id' => 20]);
        DB::table('items')->insert(['item_type_id' => 21]);
        DB::table('items')->insert(['item_type_id' => 22]);
        DB::table('items')->insert(['item_type_id' => 23]);
        DB::table('items')->insert(['item_type_id' => 24]);
        DB::table('items')->insert(['item_type_id' => 25]);
        DB::table('items')->insert(['item_type_id' => 26]);
        DB::table('items')->insert(['item_type_id' => 27]);
        DB::table('items')->insert(['item_type_id' => 28]);
        DB::table('items')->insert(['item_type_id' => 29]);
        DB::table('items')->insert(['item_type_id' => 30]);
        DB::table('items')->insert(['item_type_id' => 31]);
        DB::table('items')->insert(['item_type_id' => 32]);
        DB::table('items')->insert(['item_type_id' => 33]);
        DB::table('items')->insert(['item_type_id' => 34]);
        DB::table('items')->insert(['item_type_id' => 35]);
    }
}
