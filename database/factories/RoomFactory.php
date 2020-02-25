<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Room;
use Faker\Generator as Faker;

$factory->define(Room::class, function (Faker $faker) {
    return [
        'hotel_id'      => 1,
        'numero'        => $faker->randomNumber(),
        'ubicacion'     => 'PISO 1',
        'room_type_id'  => $faker->randomElement([1, 2, 3, 4,]),
        'room_status'   => 'ACTIVA'
    ];
});
