<?php

/* @var $factory Factory */

use App\BranchOffice;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(BranchOffice::class, function (Faker $faker) {
    $streetName = $faker->streetName;

    return [
        'code' => $faker->unique()->numerify('SUC-###'),
        'name' => $streetName,
        'address' => $faker->streetAddress,
        'neighborhood' => $streetName,
        'city' => $faker->city,
        'phone' => '5' . random_int (7, 9) . $faker->unique()->randomNumber($nbDigits = 5),
        'cellphone' => '3' . random_int (0, 2) . random_int (0, 9) . $faker->unique()->randomNumber($nbDigits = 7),
        'email' => $faker->unique()->safeEmail,
    ];
});
