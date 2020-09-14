<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
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

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'code' => $faker->text,
        'orginal_price' => $faker->text,
        'sale_price' => $faker->text,
        'brand_name' => $faker->text,
        'color' => $faker->text,
        'description' => $faker->text,
        'category_name' => $faker->text,
        'category_id' => 1,                
        'created_at' => now(),
        'updated_at' => now(),

    ];
});
