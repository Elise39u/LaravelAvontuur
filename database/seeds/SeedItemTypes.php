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

        DB::table('item_types')->insert(['id' => 1, 'name' => 'Axe', 'price' => '120', 'shop_category' => 'weapon',
            'attack' => 25, 'defense' => 0, 'location_id' => 13]);
        DB::table('item_types')->insert(['id' => 2, 'name' => 'Baseballbat', 'price' => '50', 'shop_category' => 'weapon',
            'attack' => 5, 'defense' => 0, 'location_id' => 13]);
        DB::table('item_types')->insert(['id' => 3, 'name' => 'NailGun', 'price' => '280', 'shop_category' => 'weapon',
            'attack' => 50, 'defense' => -10, 'location_id' => 13]);
    }
}
