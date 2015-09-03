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

$factory->define(Singular\Entities\User::class, function ($fake) {
    return [
        'name' => $fake->name,
        'email' => $fake->email,
        'password' => Hash::make('123'),
        'avatar'	=> 'http://api.randomuser.me/portraits/women/'.$fake->unique()->numberBetween($min = 1, $max = 50).'.jpg',
        'genero'	=> 'mujer',
        'local'     => 'veracruz',
        'remember_token' => str_random(10),
        'role' => 'user'
    ];
});

$factory->define(Singular\Entities\Profile::class, function ($faker) {
    return [
        'user_id'     => $faker->unique()->numberBetween($min = 5, $max = 30),
        'descripcion' => 'Hola me gustan los chicos',
        'interes'     => 'hombre'
    ];
});

$factory->define(Singular\Entities\Configuration::class, function ($f) {
    return [
        'user_id'   => $f->unique()->numberBetween($min = 1, $max = 30),
        'edad_min'  => 18,
        'edad_max'  => 25
    ];
});


