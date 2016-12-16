<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'surname'   =>  $faker->name,
        'phone_number'  =>  $faker->phoneNumber,
        'address'   =>  $faker->address,
        'created_at'=>  $faker->dateTime
    ];
});

$factory->define(App\Models\Review::class, function(Faker\Generator $faker) {

    return [
        'user_id'    =>  $faker->numberBetween(1, 20),
        'author'     =>  $faker->name,
        'text'       =>  $faker->text(40),
        'point'       =>  $faker->numberBetween(0, 10)
    ];
});
