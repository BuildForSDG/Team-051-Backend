<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Road;
use Faker\Generator as Faker;

$factory->define(Road::class, function (Faker $faker) {

    return [
        'code' => $faker->word,
        'name' => $faker->word,
        'total_accidents' => $faker->randomDigitNotNull,
        'total_robberies' => $faker->randomDigitNotNull,
        'total_death' => $faker->randomDigitNotNull,
        'total_kidnapping' => $faker->randomDigitNotNull,
        'risk_rating' => $faker->randomDigitNotNull
    ];
});
