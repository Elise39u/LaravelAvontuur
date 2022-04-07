<?php

use Illuminate\Database\Seeder;

class SeedInventoryItem extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inventory_items')->truncate(); // maak leeg

        DB::table('inventory_items')->insert(['item_id' => 8, 'inventory_id' => 4]);
        DB::table('inventory_items')->insert(['item_id' => 9, 'inventory_id' => 5]);
        DB::table('inventory_items')->insert(['item_id' => 60, 'inventory_id' => 6]);
    }
}
