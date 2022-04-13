<?php
namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SeedInventories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inventories')->truncate(); // maak leeg

        DB::table('inventories')->insert(['id' => 1, 'capacity' => '30']);
        DB::table('inventories')->insert(['id' => 2, 'capacity' => '30']);
        DB::table('inventories')->insert(['id' => 3, 'capacity' => '30']);
        DB::table('inventories')->insert(['id' => 4, 'capacity' => '30']);
        DB::table('inventories')->insert(['id' => 5, 'capacity' => '30']);
        DB::table('inventories')->insert(['id' => 6, 'capacity' => '30']);

    }
}
