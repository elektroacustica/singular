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
        'avatar'	=> 'http://api.randomuser.me/portraits/women/'.$faker->unique()->numberBetween($min =1, $max=50).'.jpg',
        'genero'	=> 'mujer',
        'local'     => 'veracruz',
        'remember_token' => str_random(10),
        'role' => 'user'
    ];
});

$factory->define(Singular\Entities\Profile::class, function ($faker) {
    return [
        'user_id'     => rand(1, 50),
        'descripcion' => 'Me gusta las peliculas de terror y pasear en bicicleta',
        'interes'     => 'hombre',
        'edad_min'    => 18,
        'edad_max'    => 24,
        'fecha_nacimiento'  => $faker->date($format = 'Y-m-d', $max = '1993'),
        'educacion'   => 'maestria'
    ];
});


