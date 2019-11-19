<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'email' => $faker->unique()->safeEmail,
        'name' => $faker->firstName,
        'surname' => $faker->lastName,
        'date_of_birth' => $faker->date('Y-m-d', '-18 years'),
        'phone_number' => $faker->tollFreePhoneNumber,

        'address' => $faker->address,
        'country' => $faker->country,
        'trading_account_number' => $faker->bankAccountNumber,
        'balance' => $faker->randomNumber(5),
        'open_trades' => $faker->randomNumber(2),
        'close_trades' => $faker->randomNumber(1),
    ];
});
