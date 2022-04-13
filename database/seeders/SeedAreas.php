<?php
namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SeedAreas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->truncate(); // maak leeg
        DB::table('areas')->insert(['id' => 1, 'name' => 'brooklyn']);
        DB::table('areas')->insert(['id' => 2, 'name' => 'Staten Island']);
        DB::table('areas')->insert(['id' => 3, 'name' => 'On the carrier']);
        DB::table('areas')->insert(['id' => 4, 'name' => 'Unknown sub base']);
        DB::table('areas')->insert(['id' => 5, 'name' => 'School time']);
        DB::table('areas')->insert(['id' => 6, 'name' => 'Joey Drew studios']);
    }
}
