<?php

return [

    'routes' => [

        /*
        |--------------------------------------------------------------------------
        | Name of the Route Serving the SPA
        |--------------------------------------------------------------------------
        */

        'name' => 'spa',

        /*
        |--------------------------------------------------------------------------
        | Routes Configuration
        |--------------------------------------------------------------------------
        */

        'group' => [
            'prefix' => 'spa',
            'middleware' => 'web',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Generated View Name
    |--------------------------------------------------------------------------
    |
    | After building your SPA, you should generate a Laravel view which will
    | contain the generated HTML of your SPA. Use this config option to set
    | the name of that generated file.
    |
    */

    'view' => 'spa',
];
