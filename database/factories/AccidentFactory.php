<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Accident;
use Faker\Generator as Faker;

$factory->define(Accident::class, function (Faker $faker) {

    return [
        'type' => $faker->randomElement(['fatal','minor']),
        'status' => $faker->randomElement(['ongoing','over']),
        'description' => $faker->text
    ];
});
