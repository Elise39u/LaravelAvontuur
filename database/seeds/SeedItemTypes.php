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

        // End items
        DB::table('item_types')->insert(['name' => 'Paddle', 'price' => '1000000000', 'shop_category' => 'End',
            'attack' => 0, 'defense' => 0, 'location_id' => NULL]);

        // Potion Shop items
        DB::table('item_types')->insert(['name' => 'Black Potion', 'price' => '150', 'shop_category' => 'potion',
            'attack' => 0, 'defense' => 0, 'location_id' => NULL]);
        DB::table('item_types')->insert(['name' => 'Green potion', 'price' => '250', 'shop_category' => 'potion',
            'attack' => 0, 'defense' => 0, 'location_id' => NULL]);
        DB::table('item_types')->insert(['name' => 'Red potion', 'price' => '650', 'shop_category' => 'potion',
            'attack' => 0, 'defense' => 0, 'location_id' => NULL]);
        DB::table('item_types')->insert(['name' => 'Light Red Potion', 'price' => '350', 'shop_category' => 'potion',
            'attack' => 0, 'defense' => 0, 'location_id' => NULL]);
        DB::table('item_types')->insert(['name' => 'Maroon potion', 'price' => '850', 'shop_category' => 'potion',
            'attack' => 0, 'defense' => 0, 'location_id' => NULL]);
        DB::table('item_types')->insert(['name' => 'Light Green potion', 'price' => '150', 'shop_category' => 'potion',
            'attack' => 0, 'defense' => 0, 'location_id' => NULL]);
        DB::table('item_types')->insert(['name' => 'Dark Green potion', 'price' => '450', 'shop_category' => 'potion',
            'attack' => 0, 'defense' => 0, 'location_id' => NULL]);
        DB::table('item_types')->insert(['name' => 'Aqua potion', 'price' => '5500', 'shop_category' => 'potion',
            'attack' => 0, 'defense' => 0, 'location_id' => NULL]);
        DB::table('item_types')->insert(['name' => 'Light Aqua Potion', 'price' => '2500', 'shop_category' => 'potion',
            'attack' => 0, 'defense' => 0, 'location_id' => NULL]);
        DB::table('item_types')->insert(['name' => 'Dark Aqua potion', 'price' => '8500', 'shop_category' => 'potion',
            'attack' => 0, 'defense' => 0, 'location_id' => NULL]);
        DB::table('item_types')->insert(['name' => 'Orange potion', 'price' => '850', 'shop_category' => 'potion',
            'attack' => 0, 'defense' => 0, 'location_id' => NULL]);
        DB::table('item_types')->insert(['name' => 'Light Orange Potion', 'price' => '650', 'shop_category' => 'potion',
            'attack' => 0, 'defense' => 0, 'location_id' => NULL]);
        DB::table('item_types')->insert(['name' => 'Dark Orange Potion', 'price' => '1150', 'shop_category' => 'potion',
            'attack' => 0, 'defense' => 0, 'location_id' => NULL]);
        DB::table('item_types')->insert(['name' => 'Yellow Potion', 'price' => '500', 'shop_category' => 'potion',
            'attack' => 0, 'defense' => 0, 'location_id' => NULL]);
        DB::table('item_types')->insert(['name' => 'Rainbow potion', 'price' => '125000', 'shop_category' => 'potion',
            'attack' => 0, 'defense' => 0, 'location_id' => NULL]);
    }
}
