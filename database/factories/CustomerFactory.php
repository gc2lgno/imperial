<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'nombres' => $faker->name,
        'apellidos' => $faker->lastName,
        'rif' => $faker->randomNumber(8),
        'telefono' => $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail
    ];
});
