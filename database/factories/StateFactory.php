<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\State;
use Faker\Generator as Faker;

$factory->define(State::class, function (Faker $faker) {

    $name = $faker->name;
    return [
        'name' => 'abia',
        'slug' => 'abia',
        'status' =>'enabled',
        'country_iso' =>'ng',
        'description' => $faker->text,
    ];
});
