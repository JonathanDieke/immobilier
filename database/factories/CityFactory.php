<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\models\city;
use Faker\Generator as Faker;

$factory->define(city::class, function (Faker $faker) {
    return [
        'name'=>$faker->city
    ];
});
