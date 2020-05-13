<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Country;
use Faker\Generator as Faker;

$factory->define(Country::class, function (Faker $faker) {

    return [
        'iso' => $faker->word,
        'iso3' => $faker->word,
        'name' => $faker->word,
        'status' => $faker->randomElement(['disabled','enabled']),
        'description' => $faker->text,
        'fips' => $faker->word,
        'continent' => $faker->word,
        'currency_code' => $faker->word,
        'currency_name' => $faker->word,
        'phone_prefix' => $faker->word,
        'postal_code' => $faker->word,
        'language' => $faker->word,
        'geonameid' => $faker->word
    ];
});
