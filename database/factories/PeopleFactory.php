<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */ 
 
use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Person::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'mail' => $faker->email,
        'age' => $faker->numberBetween($min = 12, $max = 100)
    ];
});
