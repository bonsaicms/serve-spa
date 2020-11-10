<?php

use BonsaiCms\ServeSpa\Http\Controllers\ServeSpaController;

Route::get('/', [ServeSpaController::class, 'serve'])->name(config('serve-spa.routes.name'));
Route::fallback([ServeSpaController::class, 'serve']);
