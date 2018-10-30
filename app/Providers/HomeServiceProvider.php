<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Library\Services\Home;

class HomeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Library\Services\Home', function ($app) {
          return new Home();
        });
    }
}
