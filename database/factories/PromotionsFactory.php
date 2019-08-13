<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Carbon\Carbon;
use App\Models\Products;
use App\Models\Promotions;
use Faker\Generator as Faker;

$factory->define(Promotions::class, function (Faker $faker) {

    $date = Carbon::create(2019, 9, 28, 0, 0, 0);
    return [
        'price' => mt_rand(10, 100),
        'productId' => Products::inRandomOrder()->first(),
        'startDate' => $date->format('Y-m-d H:i:s'),
        'endDate' => $date->addWeeks(rand(1, 52))->format('Y-m-d H:i:s'),
    ];
});
