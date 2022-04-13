<?php
namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
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
        DB::table('shops')->insert(['name' => 'Weapon shops', 'category' => 'weapon', 'extra' => 'hand', 'location_id' => '33',
            'foto_url' => '/img/shops/weapon.png']);
        DB::table('shops')->insert(['name' => 'Item shops', 'category' => 'items', 'extra' => 'sell', 'location_id' => '24',
            'foto_url' => '/img/shops/item.png']);
        DB::table('shops')->insert(['name' => 'Atm', 'category' => '', 'extra' => 'Counter', 'location_id' => '52',
            'foto_url' => '/img/shops/atm.png']);
    }
}
