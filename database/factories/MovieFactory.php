<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Movie::class, function (Faker $faker) {
    return [
        'title' => $faker->words(3, true),
        'director' => $faker->name,
        'duration' => $faker->numberBetween(60, 300),
        'imageUrl' => $faker->imageUrl(640, 480, 'cats'),
        'releaseDate' => $faker->dateTime('now'),
        'genre' => $faker->word,
    ];
});
