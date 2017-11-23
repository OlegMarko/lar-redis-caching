<?php

use Faker\Generator as Faker;
use App\Article;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(mt_rand(3, 5)),
        'description' => $faker->sentence(mt_rand(4, 6))
    ];
});
