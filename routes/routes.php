<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\View;

foreach (config('serve-spa.serve') as $config) {

    $serve = Arr::get($config, 'response');

    if (is_string($serve) && strpos($serve, '@') === false) {
        $serve = function () use ($serve) {
            return View::make($serve);
        };
    }

    Route::group(Arr::get($config, 'routeConfig'), function () use ($config, $serve) {
        Route::get('/', $serve)->name(Arr::get($config, 'routeName'));
        Route::fallback($serve);
    });
}
