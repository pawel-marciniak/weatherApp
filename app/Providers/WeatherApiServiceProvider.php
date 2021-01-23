<?php

namespace App\Providers;

use App\WeatherApi\WeatherManager;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class WeatherApiServiceProvider extends ServiceProvider
{
    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton('weatherApi', function ($app) {
            return new WeatherManager($app);
        });
    }
}
