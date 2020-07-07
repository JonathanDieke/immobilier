<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\models\commune;
use Faker\Generator as Faker;

$factory->define(commune::class, function (Faker $faker) {
    return [
        'city_id' => $faker->numberBetween(1,10),
        'name'=>$faker->streetName
    ];
});
