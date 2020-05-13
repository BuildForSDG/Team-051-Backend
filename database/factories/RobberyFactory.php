<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Robbery;
use Faker\Generator as Faker;

$factory->define(Robbery::class, function (Faker $faker) {

    return [
        'type' => $faker->randomElement(['fatal','minor']),
        'status' => $faker->randomElement(['ongoing','over', 'robbed']),
        'description' => $faker->text
    ];
});
