<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Panic;
use Faker\Generator as Faker;

$factory->define(Panic::class, function (Faker $faker) {

    return [
        'type' => $faker->randomElement(['lost track for 30 mins','panic button','suspect robbery']),
        'description' => $faker->text,
    ];
});
