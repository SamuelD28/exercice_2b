<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // We call the seeder for the personnage
        $this->call(PersonnagesTableSeeder::class);
    }
}
