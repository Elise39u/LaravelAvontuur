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

        DB::table('inventory_items')->insert(['inventory_id' => 3, 'item_id' => 1]);
        DB::table('inventory_items')->insert(['inventory_id' => 3, 'item_id' => 2]);
    }
}
