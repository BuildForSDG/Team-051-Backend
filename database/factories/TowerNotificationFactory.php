<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\TowerNotification;
use Faker\Generator as Faker;

$factory->define(TowerNotification::class, function (Faker $faker) {

    return [
        'towe_idr' => $faker->randomDigitNotNull,
        'channel_id' => $faker->randomDigitNotNull,
        'incidentable_id' => $faker->randomDigitNotNull,
        'incidentable_type' => $faker->word
    ];
});
