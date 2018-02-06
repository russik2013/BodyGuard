<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ValidationProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('popular', 'App\Http\Controllers\NewsController@top');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
