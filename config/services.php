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


    'google_directions' => [

    
    'apikey' => env('API_KEY'),
    
 
    ],

    'twilio' => [
        'accountID' => env('ACCOUNT_SID'),
        'token' => env('AUTH_TOKEN'),

    ],

    'slack' => [
        'wc_api' => env('WC_API'),
        'token' => env('SLACK_WC_TOKEN'),
        'token_cfp' => env('SLACK_WC_TOKEN_CFP'),

    ],



    'mapbox' => ['key' => env('MAPBOX'),], 

];
