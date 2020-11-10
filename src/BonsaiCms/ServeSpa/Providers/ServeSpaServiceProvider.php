<?php

namespace BonsaiCms\ServeSpa\Providers;

use Illuminate\Support\ServiceProvider;

class ServeSpaServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../../../../config/serve-spa.php' => config_path('serve-spa.php'),
        ], 'config');
        $this->mergeConfigFrom(
            __DIR__.'/../../../../config/serve-spa.php', 'serve-spa'
        );
    }
}
