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
        'client_id' => '1606078092839654',
        'client_secret' => '8ff45eba932a02bec68a22eda6c24aaf',
        'redirect' => 'http://localhost:8000/auth/facebook/callback',
    ],

    'google' => [
        'client_id' => '108833309609-rqpgjfvfipbqvo70a6qf17dvur11pnnv.apps.googleusercontent.com',
        'client_secret' => 'sgt-rGlKwO-dGZJrRActsjNw',
        'redirect' => 'http://localhost:8000/auth/google/callback',
    ],

  /*  'twitter' => [
        'client_id' => 'GYl0atrCTU2t25pN3go05JXue',
        'client_secret' => 'derzSkR8lYLH2o2O3XHdJUbATCVUUS9RSvsmcfz86jBJG2K5Gn',
        'redirect' => 'http://localhost:8000/auth/twitter/callback',
    ],*/
];
