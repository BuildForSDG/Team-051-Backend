<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Hospital;
use Faker\Generator as Faker;

$factory->define(Hospital::class, function (Faker $faker) {

    return [
        'state_id' => $faker->randomDigitNotNull,
        'lga_id' => $faker->randomDigitNotNull,
        'name' => $faker->word,
        'email' => $faker->word,
        'longitude' => $faker->randomDigitNotNull,
        'latitude' => $faker->randomDigitNotNull,
        'trusted' => $faker->randomElement([true,false]),
        'verified' => $faker->randomElement([true,false]),
        'total_calls' => $faker->randomDigitNotNull,
        'total_response' => $faker->randomDigitNotNull,
        'total_success' => $faker->randomDigitNotNull,
        'total_fails' => $faker->randomDigitNotNull,
        'rating' => $faker->randomDigitNotNull
    ];
});
