<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\models\employee;
use Faker\Generator as Faker;

$factory->define(employee::class, function (Faker $faker) {
    return [
        'number' => $faker->numberBetween(10000, 100000),
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'birthday' => $faker->date($format = 'Y-m-d', $max = '-18 years'),
        'identity' => $faker->regexify('[A-Z][0-9]{9}'),
        'phone' => $faker->e164PhoneNumber ,
        'avatar' =>'avatars/avatar.jpg' ,
    ];
});
