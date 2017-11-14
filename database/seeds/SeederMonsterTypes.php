<?php

use Illuminate\Database\Seeder;

class SeederMonsterTypes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('monster_types')->truncate(); // maak leeg

        DB::table('monster_types')->insert(['name' => 'Mutated Rat', 'image_url' => '/img/Monsters/Mutatedrat.png',
            'attack' => '50', 'defense' => '150', 'curhp' => '150', 'xp' => '10', 'gold' => '100', 'chance' => NULL]);
        DB::table('monster_types')->insert(['name' => 'Killer Clowns', 'image_url' => '/img/Monsters/killerclowns.png',
            'attack' => '10', 'defense' => '350', 'curhp' => '500', 'xp' => '50', 'gold' => '175', 'chance' => NULL]);
        DB::table('monster_types')->insert(['name' => 'Zombie', 'image_url' => '/img/Monsters/zombie.png',
            'attack' => '10', 'defense' => '0', 'curhp' => '50', 'xp' => '5', 'gold' => '50', 'chance' => NULL]);
        DB::table('monster_types')->insert(['name' => 'octo man', 'image_url' => '/img/Monsters/octoman.png',
            'attack' => '250', 'defense' => '1000', 'curhp' => '750', 'xp' => '400', 'gold' => '250', 'chance' => NULL]);
        DB::table('monster_types')->insert(['name' => 'scoripo', 'image_url' => '/img/Monsters/scoripo.png',
            'attack' => '3500', 'defense' => '3500', 'curhp' => '5000', 'xp' => '1000', 'gold' => '7500', 'chance' => '100']);
    }
}
