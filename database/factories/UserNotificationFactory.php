<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\UserNotification;
use Faker\Generator as Faker;

$factory->define(UserNotification::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'channel_id' => $faker->randomDigitNotNull,
        'incidentable_id' => $faker->randomDigitNotNull,
        'incidentable_type' => $faker->word
    ];
});
