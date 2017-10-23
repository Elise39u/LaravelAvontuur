<?php

use Illuminate\Database\Seeder;

class SeedDialoug extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dialougs')->truncate(); // maak leeg

        DB::table('dialougs')->insert(['id' => 1, 'npc_id' => 1]);
    }
}
