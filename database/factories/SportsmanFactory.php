<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Sportsmen;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name'=>fake()->name(),
        'email'=>fake()->email(),
        'class'=>fake()->label(),
        'category'=>fake()->label(),
        'age'=>fake()->age(),
        'groupid'=>fake()->random_int(1,5),
    ];
});
