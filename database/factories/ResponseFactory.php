<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Response;
use Faker\Generator as Faker;

$factory->define(Response::class, function (Faker $faker) {

    return [
        'road_id' => $faker->randomDigitNotNull,
        'trip_id' => $faker->randomDigitNotNull,
        'incident_id' => $faker->randomDigitNotNull,
        'start_time' => $faker->date('Y-m-d H:i:s'),
        'onsite_time' => $faker->date('Y-m-d H:i:s'),
        'end_time' => $faker->date('Y-m-d H:i:s'),
        'status' => $faker->randomElement(['completed','ongoing']),
        'incidentable_id' => $faker->randomDigitNotNull,
        'incidentable_type' => $faker->word
    ];
});
