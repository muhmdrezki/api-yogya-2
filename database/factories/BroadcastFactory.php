<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Broadcast;
use Faker\Generator as Faker;

$factory->define(Broadcast::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'body' => $faker->paragraph
    ];
});
