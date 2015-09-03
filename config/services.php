<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => '',
        'secret' => '',
    ],

    'mandrill' => [
        'secret' => '',
    ],

    'facebook' => [
        'client_id' => '1457610061233946',
        'client_secret' => '94649fd6c605b2842607209993642ad7',
        'default_graph_version' => 'v2.2',
        'redirect' => 'http://s1ngular.herokuapp.com/',
    ],

    'twitter' => [
        'client_id' => '3pvybVevxW2uQbHMnv7QEdMXe',
        'client_secret' => 'gTc85TJxWqUFOOGh22NziU7vC7qcwkHLQpXlGk0T4b8CnRQJf9',
        'redirect' => 'http://singular.mx/twitter/callback',
    ],

    'ses' => [
        'key'    => '',
        'secret' => '',
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => '',
        'secret' => '',
    ],

];
