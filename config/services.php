<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => '227856714327671',
        'client_secret' => '3d921e10f0b042b7310bfc56189d66c0',
        'redirect' => 'http://localhost/laravel53/public/auth/facebook/callback',
    ],

    'twitter' => [
        'client_id' => 'E28qLIcQnITSvo8wQOzOlHkvw',
        'client_secret' => 'Fkpzh2CS9jMVs18WsR1V2kzFAc3qp9MPNkSwS8W0rFxdCWfle2',
        'redirect' => 'http://localhost/laravel53/public/auth/twitter/callback',
    ],

    'google' => [
        'client_id' => '155401149705-rp6a89ikkinn5pbqf34qlnupk9gsv6vo.apps.googleusercontent.com',
        'client_secret' => 'SZrAm4oVak3rkxRjOiUxqEkg',
        'redirect' => 'http://localhost/laravel53/public/auth/google/callback',
    ],

];
