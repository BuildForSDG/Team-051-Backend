<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\PickupResponse;
use Faker\Generator as Faker;

$factory->define(PickupResponse::class, function (Faker $faker) {

    return [
        'road_id' => $faker->randomDigitNotNull,
        'trip_id' => $faker->randomDigitNotNull,
        'user_id' => $faker->randomDigitNotNull,
        'incident_id' => $faker->randomDigitNotNull,
        'status' => $faker->randomElement(['on-site','picked','dropping-off','cancelled','completed']),
        'description' => $faker->text
    ];
});
