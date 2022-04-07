<?php

use Illuminate\Database\Seeder;

class SeedUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->truncate(); // maak leeg

        DB::table('users')->insert(['id' => 1, 'name' => 'test', 'email' => 'test@test.com', 'password' => '$2y$10$AJUYfde8UKYw9FVnFR34jO0acO.LlvyE5jXraqkzUejCXX0zRM9Ty', 'inventory_id' => 1]);
        DB::table('users')->insert(['id' => 2, 'name' => 'justin van de laar', 'email' => 'justin555@live.nl', 'password' => '$2y$10$qP5JSAni5ROLJLTfTE.aaukpKP2Q1.nEFhXu5KgY63lxePPylM/FW', 'inventory_id' => 3]);
    }
}
