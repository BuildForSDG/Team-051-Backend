<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\TowResponse;
use Faker\Generator as Faker;

$factory->define(TowResponse::class, function (Faker $faker) {

    return [
        'road_id' => $faker->randomDigitNotNull,
        'trip_id' => $faker->randomDigitNotNull,
        'user_id' => $faker->randomDigitNotNull,
        'incident_id' => $faker->randomDigitNotNull,
        'status' => $faker->randomElement(['on-site','towling','cancelled','completed']),
        'description' => $faker->text
    ];
});
