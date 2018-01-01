<?php

use Illuminate\Database\Seeder;

class SeedTokens extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tokens')->truncate();

        DB::table('tokens')->insert(['name' => 'L_Red_Potion', 'effect' => '+75', 'stat_influence' => 'attack',
            'item_type' => 'Potion']);
        DB::table('tokens')->insert(['name' => 'D_Red_Potion', 'effect' => '-75', 'stat_influence' => 'attack',
            'item_type' => 'Potion']);
        DB::table('tokens')->insert(['name' => 'L_Purple_Potion', 'effect' => '+100', 'stat_influence' => 'curhp',
            'item_type' => 'Potion']);
        DB::table('tokens')->insert(['name' => 'Purple_Potion', 'effect' => '+75', 'stat_influence' => 'defense',
            'item_type' => 'Potion']);
        DB::table('tokens')->insert(['name' => 'D_Purple_Potion', 'effect' => '-100', 'stat_influence' => 'curhp',
            'item_type' => 'Potion']);
        DB::table('tokens')->insert(['name' => 'L_Aqua_Potion', 'effect' => '*1.5', 'stat_influence' => 'attack',
            'item_type' => 'Potion']);
        DB::table('tokens')->insert(['name' => 'Aqua_Potion', 'effect' => '*3', 'stat_influence' => 'attack',
            'item_type' => 'Potion']);
        DB::table('tokens')->insert(['name' => 'D_Aqua_Potion', 'effect' => '/1.5', 'stat_influence' => 'attack',
            'item_type' => 'Potion']);
        DB::table('tokens')->insert(['name' => 'L_Orange_Potion', 'effect' => '*1.5', 'stat_influence' => 'inbank',
            'item_type' => 'Potion']);
        DB::table('tokens')->insert(['name' => 'D_Orange_Potion', 'effect' => '/1.5', 'stat_influence' => 'inbank',
            'item_type' => 'Potion']);
        DB::table('tokens')->insert(['name' => 'L_Yellow_Potion', 'effect' => '+1000', 'stat_influence' => 'gold',
            'item_type' => 'Potion']);
        DB::table('tokens')->insert(['name' => 'D_Yellow_Potion', 'effect' => '-1500', 'stat_influence' => 'gold',
            'item_type' => 'Potion']);
        DB::table('tokens')->insert(['name' => 'L_Green_Potion', 'effect' => 'Set to 1', 'stat_influence' => 'curhp',
            'item_type' => 'Potion']);
        DB::table('tokens')->insert(['name' => 'Green_Potion', 'effect' => 'Set to deafult', 'stat_influence' => 'curhp',
            'item_type' => 'Potion']);
        DB::table('tokens')->insert(['name' => 'D_Green_Potion', 'effect' => 'Set to maxhp', 'stat_influence' => 'curhp',
            'item_type' => 'Potion']);
        DB::table('tokens')->insert(['name' => 'L_Pink_Potion', 'effect' => '+150', 'stat_influence' => 'maxhp',
            'item_type' => 'Potion']);
        DB::table('tokens')->insert(['name' => 'D_Pink_Potion', 'effect' => '-150', 'stat_influence' => 'maxhp',
            'item_type' => 'Potion']);
        DB::table('tokens')->insert(['name' => 'Rainbow_Potion', 'effect' => 'All the good effects', 'stat_influence' => 'All',
            'item_type' => 'Potion']);
        DB::table('tokens')->insert(['name' => 'Secret_Potion', 'effect' => 'Random effect', 'stat_influence' => 'All',
            'item_type' => 'Potion']);
        DB::table('tokens')->insert(['name' => 'Black_Potion', 'effect' => 'Set stats to default value', 'stat_influence' => 'All',
            'item_type' => 'Potion']);
        DB::table('tokens')->insert(['name' => 'Items', 'effect' => '+50', 'stat_influence' => 'gold',
            'item_type' => 'items']);
    }
}
