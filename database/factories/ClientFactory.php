<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use App\User;
use Faker\Generator as Faker;

//** Use it like this:
//   use factory with this command
//   php artisan tinker
//   factory(App\Client::class, 10)->create(); */


$factory->define(Client::class, function (Faker $faker) {
    return [
        'user_id' => function(){
            return factory('App\User')->create()->id;
        },
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
