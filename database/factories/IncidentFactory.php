<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Incident;
use Faker\Generator as Faker;

$factory->define(Incident::class, function (Faker $faker) {

    return [
        'road_id' => $faker->randomDigitNotNull,
        'trip_id' => $faker->randomDigitNotNull,
        'datetime' => $faker->date('Y-m-d H:i:s'),
        'longitude' => $faker->randomDigitNotNull,
        'latitude' => $faker->randomDigitNotNull,
        'fatalities' => $faker->randomDigitNotNull,
        'casualties' => $faker->randomDigitNotNull,
        'status' => $faker->randomElement(['ongoing','over']),
        'incidentable_id' => $faker->randomDigitNotNull,
        'incidentable_type' => $faker->word
    ];
});
