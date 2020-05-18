<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        'email' => $faker->email,
        'password' => Hash::make('password'),
        'status' => $faker->randomElement(['active', 'banned', 'suspended']),
        'source' => $faker->randomElement(['form','social','admin']),
    ];
});
