<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\MyLogger;
class LoggingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('App\Services\LoggerService', function($app)
        {
            return new MyLogger();
        });
    }
    
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
