<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\SafetyForce;
use Faker\Generator as Faker;

$factory->define(SafetyForce::class, function (Faker $faker) {

    return [
        'state_id' => $faker->randomDigitNotNull,
        'lga_id' => $faker->randomDigitNotNull,
        'name' => $faker->word,
        'email' => $faker->word,
        'total_calls' => $faker->randomDigitNotNull,
        'total_response' => $faker->randomDigitNotNull,
        'total_success' => $faker->randomDigitNotNull,
        'total_fails' => $faker->randomDigitNotNull,
        'rating' => $faker->randomDigitNotNull
    ];
});
