<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Kidnapping;
use Faker\Generator as Faker;

$factory->define(Kidnapping::class, function (Faker $faker) {

    return [
        'type' => $faker->randomElement(['fatal','minor']),
        'status' => $faker->randomElement(['ongoing','over']),
        'description' => $faker->text
    ];
});
