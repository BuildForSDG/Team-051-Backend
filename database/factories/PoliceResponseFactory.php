<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\PoliceResponse;
use Faker\Generator as Faker;

$factory->define(PoliceResponse::class, function (Faker $faker) {

    return [
        'road_id' => $faker->randomDigitNotNull,
        'trip_id' => $faker->randomDigitNotNull,
        'user_id' => $faker->randomDigitNotNull,
        'incident_id' => $faker->randomDigitNotNull,
        'status' => $faker->randomElement(['saved','rescue','assisting']),
        'description' => $faker->text
    ];
});
