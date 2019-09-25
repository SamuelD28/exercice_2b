<?php

use Illuminate\Database\Seeder;

class PersonnagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Calls the factory related to the personnage class for creating fake data.
        factory(App\Personnage::class, 100)->create();
    }
}
