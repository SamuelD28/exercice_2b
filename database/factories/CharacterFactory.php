<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

/**
 * Create a factory for creating huge amount of fake data.
 */
$factory->define(App\Character::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'intelligence' => $faker->numberBetween($min = 3, $max = 18),
        'strength' => $faker->numberBetween($min = 3, $max = 18),
        'dexterity' => $faker->numberBetween($min = 3, $max = 18),
        'constitution' => $faker->numberBetween($min = 3, $max = 18),
        'charisma' => $faker->numberBetween($min = 3, $max = 18),
        'wisdom' => $faker->numberBetween($min = 3, $max = 18)
    ];
});
