<?php

use Illuminate\Database\Seeder;

class SeederShops extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->truncate(); // maak leeg

        DB::table('shops')->insert(['name' => 'Potion shops', 'category' => 'potion', 'extra' => 'healer', 'location_id' => '20',
            'foto_url' => '/img/shops/potion.png']);
    }
}
