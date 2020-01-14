<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(/**
 * @param Faker $faker
 * @return array
 */
    Book::class, function (Faker $faker) {
    return array(
        'title' => $faker->sentence($nbWords = 4, $variableNbWords = true),
        'release_date' =>Carbon::now(),
        'author_id' => App\Author::all()->random()->id,
        'created_at' => Carbon::now()->subDays(2),
        'updated_at' => Carbon::now()->subDays(1),
    );
});
