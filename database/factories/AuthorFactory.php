<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Author;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(/**
 * @param Faker $faker
 * @return array
 */
    Author::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'age' => rand(0,100),
        'address' => $faker->address,
        'created_at' => Carbon::now()->subDays(10),
        'updated_at' => Carbon::now()->subDays(1),
    ];
});