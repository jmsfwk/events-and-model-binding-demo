<?php

use Faker\Generator as Faker;

$factory->define(\App\Cat::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->firstName,
        'fluffyness' => $faker->numberBetween(0, 5),
    ];
});
