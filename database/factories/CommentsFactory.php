<?php

use Faker\Generator as Faker;
use App\Article;

$factory->define(App\Comments::class, function (Faker $faker) {
    return [
        'article_id' => function(){
            return Article::all()->random();
        },
        'comment' => $faker->text(200)
    ];
});
