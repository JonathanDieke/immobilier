<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\models\contract;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;


$factory->define(contract::class, function (Faker $faker) {

    $array = [
        "Achat d'une maison",
        "Achat d'un appartement",
        "location d'un appartement",
        "location d'une maison",
        "location d'un terrain",
        "Vente d'un terrain",
    ];

    return [
        'number' => $faker->numberBetween(10000, 100000),
        'immovable_id' => $faker->numberBetween(1,20),
        'client_id' => $faker->numberBetween(1,20),
        'employee_id' => $faker->numberBetween(1,10),
        'date' => $faker->date('Y-m-d', 'now'),
        'title' => Arr::random($array)
    ];
});
