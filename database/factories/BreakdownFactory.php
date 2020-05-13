<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Breakdown;
use Faker\Generator as Faker;

$factory->define(Breakdown::class, function (Faker $faker) {

    return [
        'type' => $faker->randomElement(['flat tire','overheating',"dont know"]),
        'status' => $faker->randomElement(['ongoing','over','completed']),
    ];
});
