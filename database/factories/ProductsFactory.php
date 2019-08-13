<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Products;
use App\Models\Categories;
use Faker\Generator as Faker;

$factory->define(Products::class, function (Faker $faker) {
    $faker = \Faker\Factory::create();
    \Bezhanov\Faker\ProviderCollectionHelper::addAllProvidersTo($faker);
    return [
        'name' => $faker->productName,
        'categoryId' => Categories::inRandomOrder()->first(),
        'basePrice' => mt_rand(15, 150)
    ];
});
