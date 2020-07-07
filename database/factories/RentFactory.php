<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\models\rent;
use Faker\Generator as Faker;

$factory->define(rent::class, function (Faker $faker) {
    return [
        'immovable_id' => $faker->numberBetween(1,20),
        'client_id' => $faker->numberBetween(1,20),
    ];
});
