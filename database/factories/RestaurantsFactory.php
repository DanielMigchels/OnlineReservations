<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Restaurants;
use Faker\Generator as Faker;

$factory->define(Restaurants::class, function (Faker $faker) {
    return [
        'name' => substr($faker->sentence(2), 0, -1),
        'description' => $faker->paragraph,
        'imagesource' => $faker->url,
    ];
});
