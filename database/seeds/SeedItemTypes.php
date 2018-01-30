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

        // Normal Items
        DB::table('item_types')->insert(['id' => 5, 'name' => 'Jerry can', 'price' => '1200', 'shop_category' => 'items',
            'attack' => 0, 'defense' => 0, 'location_id' => 26]);
        DB::table('item_types')->insert(['id' => 6, 'name' => 'The boat', 'price' => '100000', 'shop_category' => 'items',
            'attack' => 0, 'defense' => 0, 'location_id' => 11]);
        DB::table('item_types')->insert(['id' => 7, 'name' => 'A car', 'price' => '260000', 'shop_category' => 'items',
            'attack' => 0, 'defense' => 1500, 'location_id' => 29]);
        DB::table('item_types')->insert(['id' => 34, 'name' => 'A Security card', 'price' => '8000', 'shop_category' => 'items',
            'attack' => 0, 'defense' => 0, 'location_id' => 23]);
        DB::table('item_types')->insert(['id' => 35, 'name' => 'Police Key', 'price' => '1000', 'shop_category' => 'items',
            'attack' => 0, 'defense' => 0, 'location_id' => 53]);
        DB::table('item_types')->insert(['id' => 36, 'name' => 'Bank Key', 'price' => '1000', 'shop_category' => 'items',
            'attack' => 0, 'defense' => 0, 'location_id' => 57]);
        DB::table('item_types')->insert(['id' => 37, 'name' => 'Graveyard Key', 'price' => '1000', 'shop_category' => 'items',
            'attack' => 0, 'defense' => 0, 'location_id' => 58]);
        DB::table('item_types')->insert(['id' => 38, 'name' => 'Antenna', 'price' => '3000', 'shop_category' => 'items',
            'attack' => 0, 'defense' => 0, 'location_id' => 60]);
        DB::table('item_types')->insert(['id' => 39, 'name' => 'signal device', 'price' => '2000', 'shop_category' => 'items',
            'attack' => 0, 'defense' => 0, 'location_id' => 38]);
        DB::table('item_types')->insert(['id' => 40, 'name' => 'receiver', 'price' => '1600', 'shop_category' => 'items',
            'attack' => 0, 'defense' => 0, 'location_id' => 38]);
        DB::table('item_types')->insert(['id' => 54, 'name' => 'ladder', 'price' => '1000', 'shop_category' => 'items',
            'attack' => 0, 'defense' => 0, 'location_id' => '']);

        // End items
        DB::table('item_types')->insert(['id' => 8, 'name' => 'Paddle', 'price' => '1000000000', 'shop_category' => 'End',
            'attack' => 0, 'defense' => 0, 'location_id' => NULL]);
        DB::table('item_types')->insert(['id' => 9, 'name' => 'Gold bar', 'price' => '1000000000', 'shop_category' => 'End',
            'attack' => 0, 'defense' => 0, 'location_id' => NULL]);

        // Potion Shop items
        DB::table('item_types')->insert(['id' => 10, 'name' => 'Black Potion', 'price' => '150', 'shop_category' => 'potion',
            'attack' => 0, 'defense' => 0, 'location_id' => NULL]);
        DB::table('item_types')->insert(['id' => 11, 'name' => 'Green potion', 'price' => '250', 'shop_category' => 'potion',
            'attack' => 0, 'defense' => 0, 'location_id' => NULL]);
        DB::table('item_types')->insert(['id' => 12, 'name' => 'Red potion', 'price' => '650', 'shop_category' => 'potion',
            'attack' => 0, 'defense' => 0, 'location_id' => NULL]);
        DB::table('item_types')->insert(['id' => 13, 'name' => 'Light Red Potion', 'price' => '350', 'shop_category' => 'potion',
            'attack' => 0, 'defense' => 0, 'location_id' => NULL]);
        DB::table('item_types')->insert(['id' => 14, 'name' => 'Maroon potion', 'price' => '850', 'shop_category' => 'potion',
            'attack' => 0, 'defense' => 0, 'location_id' => NULL]);
        DB::table('item_types')->insert(['id' => 15, 'name' => 'Light Green potion', 'price' => '150', 'shop_category' => 'potion',
            'attack' => 0, 'defense' => 0, 'location_id' => NULL]);
        DB::table('item_types')->insert(['id' => 16, 'name' => 'Dark Green potion', 'price' => '450', 'shop_category' => 'potion',
            'attack' => 0, 'defense' => 0, 'location_id' => NULL]);
        DB::table('item_types')->insert(['id' => 17, 'name' => 'Aqua potion', 'price' => '5500', 'shop_category' => 'potion',
            'attack' => 0, 'defense' => 0, 'location_id' => NULL]);
        DB::table('item_types')->insert(['id' => 18, 'name' => 'Light Aqua Potion', 'price' => '2500', 'shop_category' => 'potion',
            'attack' => 0, 'defense' => 0, 'location_id' => NULL]);
        DB::table('item_types')->insert(['id' => 19, 'name' => 'Dark Aqua potion', 'price' => '8500', 'shop_category' => 'potion',
            'attack' => 0, 'defense' => 0, 'location_id' => NULL]);
        DB::table('item_types')->insert(['id' => 20, 'name' => 'Orange potion', 'price' => '850', 'shop_category' => 'potion',
            'attack' => 0, 'defense' => 0, 'location_id' => NULL]);
        DB::table('item_types')->insert(['id' => 21, 'name' => 'Light Orange Potion', 'price' => '650', 'shop_category' => 'potion',
            'attack' => 0, 'defense' => 0, 'location_id' => NULL]);
        DB::table('item_types')->insert(['id' => 22, 'name' => 'Dark Orange Potion', 'price' => '1150', 'shop_category' => 'potion',
            'attack' => 0, 'defense' => 0, 'location_id' => NULL]);
        DB::table('item_types')->insert(['id' => 23, 'name' => 'Yellow Potion', 'price' => '500', 'shop_category' => 'potion',
            'attack' => 0, 'defense' => 0, 'location_id' => NULL]);
        DB::table('item_types')->insert(['id' => 24, 'name' => 'Rainbow potion', 'price' => '125000', 'shop_category' => 'potion',
            'attack' => 0, 'defense' => 0, 'location_id' => NULL]);
        DB::table('item_types')->insert(['id' => 25, 'name' => 'Purple potion', 'price' => '1750', 'shop_category' => 'potion',
            'attack' => 0, 'defense' => 0, 'location_id' => NULL]);
        DB::table('item_types')->insert(['id' => 26, 'name' => 'Light Purple potion', 'price' => '1000', 'shop_category' => 'potion',
            'attack' => 0, 'defense' => 0, 'location_id' => NULL]);
        DB::table('item_types')->insert(['id' => 27, 'name' => 'Dark Purple potion', 'price' => '1500', 'shop_category' => 'potion',
            'attack' => 0, 'defense' => 0, 'location_id' => NULL]);
        DB::table('item_types')->insert(['id' => 28, 'name' => 'Pink potion', 'price' => '1500', 'shop_category' => 'potion',
            'attack' => 0, 'defense' => 0, 'location_id' => NULL]);
        DB::table('item_types')->insert(['id' => 29, 'name' => 'Dark Pink potion', 'price' => '1750', 'shop_category' => 'potion',
            'attack' => 0, 'defense' => 0, 'location_id' => NULL]);
        DB::table('item_types')->insert(['id' => 30,'name' => 'Light Pink potion', 'price' => '1950', 'shop_category' => 'potion',
            'attack' => 0, 'defense' => 0, 'location_id' => NULL]);
        DB::table('item_types')->insert(['id' => 31,'name' => 'Light Yellow potion', 'price' => '1000', 'shop_category' => 'potion',
            'attack' => 0, 'defense' => 0, 'location_id' => NULL]);
        DB::table('item_types')->insert(['id' => 32,'name' => 'Dark Yellow potion', 'price' => '1250', 'shop_category' => 'potion',
            'attack' => 0, 'defense' => 0, 'location_id' => NULL]);
        DB::table('item_types')->insert(['id' => 33,'name' => 'Secret Potion', 'price' => '1600', 'shop_category' => 'potion',
            'attack' => 0, 'defense' => 0, 'location_id' => NULL]);

        //Weapon items
        DB::table('item_types')->insert(['id' => 1, 'name' => 'Axe', 'price' => '120', 'shop_category' => 'weapon',
                                         'attack' => 25, 'defense' => 0, 'location_id' => 13]);
        DB::table('item_types')->insert(['id' => 2, 'name' => 'Baseballbat', 'price' => '50', 'shop_category' => 'weapon',
                                         'attack' => 5, 'defense' => 0, 'location_id' => 13]);
        DB::table('item_types')->insert(['id' => 3, 'name' => 'NailGun', 'price' => '280', 'shop_category' => 'weapon',
                                         'attack' => 50, 'defense' => -10, 'location_id' => 13]);
        DB::table('item_types')->insert(['id' => 4, 'name' => 'Wooden sword', 'price' => '110', 'shop_category' => 'weapon',
                                         'attack' => 15, 'defense' => 5, 'location_id' => 13]);
        DB::table('item_types')->insert(['id' => 41, 'name' => 'Rpg', 'price' => '7600', 'shop_category' => 'weapon',
                                         'attack' => 1500, 'defense' => -100, 'location_id' => '']);
        DB::table('item_types')->insert(['id' => 42, 'name' => 'Javelin', 'price' => '10000', 'shop_category' => 'weapon',
                                         'attack' => 800, 'defense' => -250, 'location_id' => '']);
        DB::table('item_types')->insert(['id' => 43, 'name' => 'AK-47', 'price' => '7600', 'shop_category' => 'weapon',
                                         'attack' => 160, 'defense' => 40, 'location_id' => '']);
        DB::table('item_types')->insert(['id' => 44, 'name' => 'ASO-50', 'price' => '4500', 'shop_category' => 'weapon',
                                         'attack' => 450, 'defense' => 0, 'location_id' => '']);
        DB::table('item_types')->insert(['id' => 45, 'name' => 'MSR', 'price' => '8800', 'shop_category' => 'weapon',
                                         'attack' => 600, 'defense' => 100, 'location_id' => '']);
        DB::table('item_types')->insert(['id' => 46, 'name' => 'M4A4', 'price' => '6600', 'shop_category' => 'weapon',
                                         'attack' => 200, 'defense' => 50, 'location_id' => '']);
        DB::table('item_types')->insert(['id' => 47, 'name' => 'Ice Staff', 'price' => '1000000', 'shop_category' => 'weapon',
                                         'attack' => 45000, 'defense' => 2000, 'location_id' => '']);
        DB::table('item_types')->insert(['id' => 48, 'name' => 'FaceMelter', 'price' => '900000', 'shop_category' => 'weapon',
                                         'attack' => 20000, 'defense' => 1500, 'location_id' => '']);
        DB::table('item_types')->insert(['id' => 49, 'name' => 'M911', 'price' => '2000', 'shop_category' => 'weapon',
                                         'attack' => 100, 'defense' => 0, 'location_id' => '']);
        DB::table('item_types')->insert(['id' => 50, 'name' => 'CZ-57', 'price' => '1800', 'shop_category' => 'weapon',
                                         'attack' => 80, 'defense' => 0, 'location_id' => '']);
        DB::table('item_types')->insert(['id' => 51, 'name' => 'Barret-50.cal', 'price' => '9000', 'shop_category' => 'weapon',
                                         'attack' => 950, 'defense' => 100, 'location_id' => '']);
        DB::table('item_types')->insert(['id' => 52, 'name' => 'Scar-20', 'price' => '5600', 'shop_category' => 'weapon',
                                         'attack' => 190, 'defense' => 30, 'location_id' => '']);
        DB::table('item_types')->insert(['id' => 53, 'name' => 'Spear', 'price' => '100', 'shop_category' => 'weapon',
                                         'attack' => 50, 'defense' => -10, 'location_id' => '']);
    }
}
