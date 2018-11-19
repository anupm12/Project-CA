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
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'google' => [
        'client_id' => '343644984641-hnqpg9g38p3eq15m4mnd7e4dromqo4o9.apps.googleusercontent.com',         // Your GitHub Client ID
        'client_secret' => '4bIeicHI-EsE35-IGeeqZFXP', // Your GitHub Client Secret
        'redirect' => 'http://localhost:8000/login/google/callback',
    ],

    'facebook' => [
        'client_id' => '1770683679724204',         // Your GitHub Client ID
        'client_secret' => '058fd491629d8d91158e71fbccaaff19', // Your GitHub Client Secret
        'redirect' => 'http://localhost:8000/login/facebook/callback',
    ],

];
