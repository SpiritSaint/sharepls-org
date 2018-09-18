<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Category::class, function (Faker $faker) {
    return [
        'name' => join(' ', $faker->words(2)),
        'slug' => $faker->slug,
        'caption' => join(' ', $faker->words(10)),
    ];
});
