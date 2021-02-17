<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\post;
use Faker\Generator as Faker;

$factory->define(post::class, function (Faker $faker) {
    return [
        //
        'title'=>$faker->title,
        'content'=>$faker->paragraph,
        'status'=>"active",
        'user_id'=>rand(1,10),
    ];
});
