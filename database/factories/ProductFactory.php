<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(4),
        'brand' => $faker->sentence(4),
        'picture' => $faker->image,
        'description' => $faker->sentence(4),
        'price' => $faker->randomDigit(),
        'owner_id' => factory(App\User::class)
    ];
});
