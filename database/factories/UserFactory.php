<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Refill;
use Carbon\Carbon;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(Refill::class, function (Faker $faker) {
    return [
        'date' => Carbon::now(),
        'refill_amount' => 1000,
        'user_id' => 1,
        'created_at' => Carbon::now()
    ];
});
