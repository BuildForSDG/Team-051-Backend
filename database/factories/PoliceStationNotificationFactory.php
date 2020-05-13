<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\PoliceStationNotification;
use Faker\Generator as Faker;

$factory->define(PoliceStationNotification::class, function (Faker $faker) {

    return [
        'police_station_id' => $faker->randomDigitNotNull,
        'channel_id' => $faker->randomDigitNotNull,
        'incidentable_id' => $faker->randomDigitNotNull,
        'incidentable_type' => $faker->randomDigitNotNull
    ];
});
