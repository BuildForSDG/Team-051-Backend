<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Phone;
use Faker\Generator as Faker;

$factory->define(Phone::class, function (Faker $faker) {

    return [
        'number' => $faker->randomDigitNotNull,
        'phoneable_id' => $faker->randomDigitNotNull,
        'phoneable_type' => $faker->word
    ];
});
