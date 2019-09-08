<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'title' => $faker->text,
        'price' => $faker->numberBetween(100, 10000),
        'description' => $faker->text,
        'author_id' => 1,
        'bids' => '0',
        'executor' => '',
    ];
});
