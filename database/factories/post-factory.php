<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Post;
$factory->define(Post::class, function (Faker $faker) {
    return ['user_id'=> $faker->randomDigitNot(1),
    		'title'=> $faker->sentence(5),
    		'body'=> $faker->text(100)
        
    ];
});
