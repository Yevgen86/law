<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'user_id' => factory(\App\User::class),
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'email' => $faker->email,
        'tel' => $faker->phoneNumber,
        'address' => $faker->streetAddress,
        'plz' => $faker->postcode,
        'city' => $faker->city,
        'country' => $faker->country,
    ];
});
