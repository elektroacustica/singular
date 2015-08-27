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

$factory->define(Singular\Entities\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => Hash::make('123'),
        'avatar'	=> 'http://api.randomuser.me/portraits/'.$faker->randomElement($array = array ('men','women')).'/'.$faker->unique()->numberBetween($min = 1, $max = 50).'.jpg',
        'remember_token' => str_random(10),
        'role' => $faker->randomElement(['user', 'editor']),
    ];
});
