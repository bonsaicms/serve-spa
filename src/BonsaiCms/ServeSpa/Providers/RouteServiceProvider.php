<?php

namespace BonsaiCms\ServeSpa\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        Route::group(config('serve-spa.globalRoutesConfig'), __DIR__.'/../../../../routes/routes.php');
    }
}
