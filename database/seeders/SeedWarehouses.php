<?php

use Illuminate\Database\Seeder;

class SeedWarehouses extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('warehouses')->truncate();

        DB::table('warehouses')->insert(['name' => 'standard warehouse']);
    }
}
