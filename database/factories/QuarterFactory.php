<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\models\quarter;
use Faker\Generator as Faker;

$factory->define(quarter::class, function (Faker $faker) {
    return [
        'commune_id' => $faker->numberBetween(1,20),
        'name'=>$faker->cityPrefix
    ];
});
