<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SeedLocations::class);
        $this->call(SeedDialougAnswer::class);
        $this->call(SeedConditions::class);
        $this->call(SeedUsers::class);
        $this->call(SeedNpcs::class);
        $this->call(SeedQuests::class);
        $this->call(SeedNpcQuests::class);
        $this->call(SeedDialoug::class);
        $this->call(SeedAreas::class);
        $this->call(SeedItems::class);
    }
}
