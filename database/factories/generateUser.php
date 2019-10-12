<?php

use Faker\Generator as Faker;

$factory->define(App\Models\User::class, function (Faker $faker) {
    $gender = $faker->randomElement(['male', 'female']);
    return [
        'first_name' => $faker->firstName,
        'last_name' =>  $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('admin'),
        'birthday' => $faker->date(),
        'gender' => $gender,
        'phoneno' => $faker->phoneNumber,
        'email_verification_token' => str_random(10).time(),
    ];
});
