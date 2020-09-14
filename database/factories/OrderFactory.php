<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
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

$factory->define(Order::class, function (Faker $faker) {
    return [
    	'user_id' => 1,
        'email' => $faker->unique()->safeEmail,
        'customer_name' => $faker->name,
        'address' => $faker->address,
        'phone' => $faker->text,
        'card_name' => $faker->text,
        'card_date' => now(),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
