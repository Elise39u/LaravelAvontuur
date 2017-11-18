<?php

use Illuminate\Database\Seeder;

class SeedItemTypes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item_types')->truncate(); // maak leeg

        DB::table('item_types')->insert(['name' => 'Axe', 'price' => '120', 'shop_category' => 'weapon',
            'attack' => 25, 'defense' => 0, 'location_id' => 13]);
        DB::table('item_types')->insert(['name' => 'Baseballbat', 'price' => '50', 'shop_category' => 'weapon',
            'attack' => 5, 'defense' => 0, 'location_id' => 13]);
        DB::table('item_types')->insert(['name' => 'NailGun', 'price' => '280', 'shop_category' => 'weapon',
            'attack' => 50, 'defense' => -10, 'location_id' => 13]);
        DB::table('item_types')->insert(['name' => 'Wooden sword', 'price' => '110', 'shop_category' => 'weapon',
            'attack' => 15, 'defense' => 5, 'location_id' => 13]);
        DB::table('item_types')->insert(['name' => 'Jerry can', 'price' => '1200', 'shop_category' => 'items',
            'attack' => 0, 'defense' => 0, 'location_id' => 26]);
        DB::table('item_types')->insert(['name' => 'The boat', 'price' => '100000', 'shop_category' => 'items',
            'attack' => 0, 'defense' => 0, 'location_id' => 11]);
        DB::table('item_types')->insert(['name' => 'A car', 'price' => '260000', 'shop_category' => 'items',
            'attack' => 0, 'defense' => 1500, 'location_id' => 29]);
        DB::table('item_types')->insert(['name' => 'Paddle', 'price' => '1000000000', 'shop_category' => 'End',
            'attack' => 0, 'defense' => 0, 'location_id' => NULL]);
        DB::table('item_types')->insert(['name' => 'Black Potion', 'price' => '150', 'shop_category' => 'potion',
            'attack' => 0, 'defense' => 0, 'location_id' => NULL]);
        DB::table('item_types')->insert(['name' => 'Green potion', 'price' => '250', 'shop_category' => 'potion',
            'attack' => 0, 'defense' => 0, 'location_id' => NULL]);
    }
}
