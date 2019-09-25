<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

/**
 * Create a factory for creating huge amount of fake data.
 */
$factory->define(App\Personnage::class, function (Faker $faker) {
    return [
        'nom' => $faker->name,
        'intelligence' => $faker->numberBetween($min = 3, $max = 18),
        'force' => $faker->numberBetween($min = 3, $max = 18),
        'dexterite' => $faker->numberBetween($min = 3, $max = 18),
        'constitution' => $faker->numberBetween($min = 3, $max = 18),
        'charisme' => $faker->numberBetween($min = 3, $max = 18),
        'sagesse' => $faker->numberBetween($min = 3, $max = 18)
    ];
});