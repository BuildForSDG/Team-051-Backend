<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\RoadSafetyResponse;
use Faker\Generator as Faker;

$factory->define(RoadSafetyResponse::class, function (Faker $faker) {

    return [
        'road_id' => $faker->randomDigitNotNull,
        'trip_id' => $faker->randomDigitNotNull,
        'user_id' => $faker->randomDigitNotNull,
        'incident_id' => $faker->randomDigitNotNull,
        'status' => $faker->randomElement(['saved','on-site','helping','helped','rescue','first aid','safe','completed']),
        'description' => $faker->text
    ];
});
