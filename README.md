# Serve SPA (Single-Page-Application) from Laravel Package

## Introduction
By default, this package will register route `GET /spa` (with name `spa`) and this route will serve static SPA content from view named `spa`. For example it can be `resources/views/spa.blade.php` or `resources/views/spa.html`.

## Installation
```bash2
$ composer require bonsaicms/serve-spa
```

### Configuration

You can publish the configuration file with the following command:

```bash2
$ php artisan vendor:publish --tag=serve-spa
```

Then you can customize your config file `app/config/serve-spa.php`.

#### Default Configuration file

*Notice, that you can define multiple SPAs in the `serve` configuration key.*

```php
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Array of Single Page Applications
    |--------------------------------------------------------------------------
    |
    | You can define multiple items here.
    |
    */

    'serve' => [

        /*
        |--------------------------------------------------------------------------
        | Example SPA
        |--------------------------------------------------------------------------
        */

        [

            /*
            |--------------------------------------------------------------------------
            | Name of the Route Serving the SPA
            |--------------------------------------------------------------------------
            */

            'routeName' => 'spa',

            /*
            |--------------------------------------------------------------------------
            | Route Configuration
            |--------------------------------------------------------------------------
            |
            | This configuration will be applied only for this SPA.
            |
            */

            'routeConfig' => [
                'prefix' => 'spa',
            ],

            /*
            |--------------------------------------------------------------------------
            | Response
            |--------------------------------------------------------------------------
            |
            | Example values:
            |
            |  - 'someViewName'
            |  - 'MyController@myMethod'
            |  - [ MyController::class, 'myMethod' ]
            |  - function () { return 'my custom response'; }
            |
            */

            'response' => 'spa',

        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Global Route Configuration
    |--------------------------------------------------------------------------
    |
    | This configuration will be applied for all defined SPAs.
    |
    */

    'globalRoutesConfig' => [
        'middleware' => 'web',
    ],
];
```
