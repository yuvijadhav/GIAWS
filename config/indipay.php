<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Indipay Service Config
    |--------------------------------------------------------------------------
    |   gateway = CCAvenue / PayUMoney / EBS / Citrus / InstaMojo
    |   view    = File
    */

    'gateway' => 'InstaMojo',                // Replace with the name of default gateway you want to use

    'testMode'  => true,                   // True for Testing the Gateway [For production false]

    'ccavenue' => [                         // CCAvenue Parameters
    'merchantId'  => '123857',
    'accessCode'  => 'AVME69EB16AS18EMSA',
    'workingKey' => 'F4A783E1C9DB84A1ED7BC94426B28214',

        // Should be route address for url() function
    'redirectUrl' => env('INDIPAY_REDIRECT_URL', 'http://localhost:81/apexmarketsresearch.com/success'),
    'cancelUrl' => env('INDIPAY_CANCEL_URL', 'http://localhost:81/apexmarketsresearch.com/failure'),

    'currency' => env('INDIPAY_CURRENCY', 'USD'),
    'language' => env('INDIPAY_LANGUAGE', 'EN'),
    ],

    'payumoney' => [                         // PayUMoney Parameters
    'merchantKey'  => env('INDIPAY_MERCHANT_KEY', ''),
    'salt'  => env('INDIPAY_SALT', ''),
    'workingKey' => env('INDIPAY_WORKING_KEY', ''),

        // Should be route address for url() function
    'successUrl' => env('INDIPAY_SUCCESS_URL', 'indipay/response'),
    'failureUrl' => env('INDIPAY_FAILURE_URL', 'indipay/response'),
    ],

    'ebs' => [                         // EBS Parameters
    'account_id'  => env('INDIPAY_MERCHANT_ID', '25461'),
    'secretKey' => env('INDIPAY_WORKING_KEY', 'ff1c41936bf79b289845c9e5ab35f731'),

        // Should be route address for url() function
    'return_url' => env('INDIPAY_SUCCESS_URL', 'indipay/response'),
    ],

    'citrus' => [                         // Citrus Parameters
    'vanityUrl'  => env('INDIPAY_CITRUS_VANITY_URL', ''),
    'secretKey' => env('INDIPAY_WORKING_KEY', ''),

        // Should be route address for url() function
    'returnUrl' => env('INDIPAY_SUCCESS_URL', 'indipay/response'),
    'notifyUrl' => env('INDIPAY_SUCCESS_URL', 'indipay/response'),
    ],

    'instamojo' =>  [
    'api_key' => env('INSTAMOJO_API_KEY',''),
    'auth_token' => env('INSTAMOJO_AUTH_TOKEN',''),
    'redirectUrl' => env('INDIPAY_REDIRECT_URL', 'indipay/response'),
    ],

    // Add your response link here. In Laravel 5.2 you may use the api middleware instead of this.
    'remove_csrf_check' => [
    'indipay/response'
    ],





    ];
