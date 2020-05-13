<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\HospitalResponse;
use Faker\Generator as Faker;

$factory->define(HospitalResponse::class, function (Faker $faker) {

    return [
        'road_id' => $faker->randomDigitNotNull,
        'trip_id' => $faker->randomDigitNotNull,
        'user_id' => $faker->randomDigitNotNull,
        'incident_id' => $faker->randomDigitNotNull,
        'status' => $faker->randomElement(['saved','admitted','first aid','discharged']),
        'description' => $faker->text
    ];
});
