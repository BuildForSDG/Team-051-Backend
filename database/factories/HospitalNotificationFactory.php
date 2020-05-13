<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\HospitalNotification;
use Faker\Generator as Faker;

$factory->define(HospitalNotification::class, function (Faker $faker) {

    return [
        'hospital_id' => $faker->randomDigitNotNull,
        'channel_id' => $faker->randomDigitNotNull,
        'incidentable_id' => $faker->randomDigitNotNull,
        'incidentable_type' => $faker->word
    ];
});
