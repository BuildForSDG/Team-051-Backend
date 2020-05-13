<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Trip;
use Faker\Generator as Faker;

$factory->define(Trip::class, function (Faker $faker) {

    return [
        'road_id' => $faker->randomDigitNotNull,
        'incident_id' => $faker->randomDigitNotNull,
        'start_time' => $faker->date('Y-m-d H:i:s'),
        'end_time' => $faker->date('Y-m-d H:i:s'),
        'status' => $faker->randomElement(['ongoing', 'lost', 'track', 'completed', 'cancelled'])
    ];
});
