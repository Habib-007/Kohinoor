<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Products;
use App\Models\Category;
use Faker\Generator as Faker;

$factory->define(Products::class, function (Faker $faker) {
    return [
        'category_id'=>Category::all()->random()->id,
        "title"=>$faker->text(100),
        "description"=>$faker->realText(),
    ];
});
