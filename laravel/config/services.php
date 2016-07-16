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

    'google' => [
        'client_id' => '891511546225-iou2rsm734tk3gih82c6hvi4g011bo9o.apps.googleusercontent.com',
        'client_secret' => 'Pt_JL8S-VEAM7gNP5EQbZQbB',
        'redirect' => 'http://fantasycow.com:6069/auth/google/callback',
    ],
    'twitter' => [
        'client_id' => 'ZdLUYho0LXBZB4uwS4kpDRLZa',
        'client_secret' => 'EHRpTkGX5qg4cNUNkLYw30SOvYGUwxPAeXk1c3FOXwU7UbIvDW',
        'redirect' => 'http://fantasycow.com:6069/auth/twitter/callback',
    ],
];
