<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\UserSetting;
use Faker\Generator as Faker;

$factory->define(UserSetting::class, function (Faker $faker) {

    $track_vehicle = (bool) $faker->randomElement([false, true]);
    return [
        'user_id' => $faker->randomDigitNotNull,
        'track_vehicle' => $track_vehicle === '0' ? false : $track_vehicle
    ];
});
