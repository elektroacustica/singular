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
        'client_id' => '1605569146364023',
        'client_secret' => '623cf925d928fa0fcb7de0a0dd4d3586',
        'redirect' => 'http://singular.mx/facebook/callback',
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
