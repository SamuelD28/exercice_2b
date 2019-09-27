<?php

use Illuminate\Database\Seeder;

class CharactersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Calls the factory related to the personnage class for creating fake data.
        factory(App\Character::class, 100)->create();
    }
}
