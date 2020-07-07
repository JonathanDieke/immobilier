<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\models\immovable;
use Faker\Generator as Faker;

$factory->define(immovable::class, function (Faker $faker) {

    return [
        'number' => $faker->regexify('[A-Z+0-9]{3}[A-Z+0-9]{3}') ,
        'quarter_id' => $faker->numberBetween(1,40),
        'category_id' => $faker->numberBetween(1,2),
        'client_id' => $faker->numberBetween(1,20),
        'status_id' => $faker->numberBetween(1,4),
        'title' => $faker->sentence(10),
        'surface' => $faker->numberBetween(100,1500),
        'price' => $faker->numberBetween(100000, 5000000),
        'pictures' => '{"1":"avatars/avatar.jpg", "2":"avatars/avatar.jpg", "3":"avatars/avatar.jpg"}' ,
    ];
});
