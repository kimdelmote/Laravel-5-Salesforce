<?php

$config = [

    /*
    |--------------------------------------------------------------------------
    | Your Salesforce credentials
    |--------------------------------------------------------------------------
    |
    |
    */

    // production
    'username'     => env('SALESFORCE_USERNAME'),
    'password'     => env('SALESFORCE_PASSWORD'),
    'token'        => env('SALESFORCE_TOKEN'),
    'wsdl'         => storage_path('app/' . env('SALESFORCE_WSDL', 'wsdl/enterprise.wsdl.xml')),
    'soap_options' => [],
];

if (env('SALESFORCE_CACHE_NONE', false)) {
    $config['soap_options']['cache_wsdl'] = WSDL_CACHE_NONE;
}

return $config;
