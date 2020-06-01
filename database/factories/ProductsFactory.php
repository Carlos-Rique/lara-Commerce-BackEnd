<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Products;
use Faker\Generator as Faker;

$factory->define(Products::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->text(),
        'price' => $faker->randomFloat($nbMaxDecimals = 1, $max = 3, $min = 1 ),
        'unit' => $faker->randomNumber($nbDigits = 2)
    ];
});
