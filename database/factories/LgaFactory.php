<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Lga;
use Faker\Generator as Faker;

$factory->define(Lga::class, function (Faker $faker) {

    return [
        'name' => 'aba south',
        'state_id' => 1,
        'state_slug' => 'abia',
        'status' => 'enabled',
        'description' => $faker->text,
    ];
});
