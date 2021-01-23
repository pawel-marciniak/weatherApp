<?php

namespace App\WeatherApi;

use Illuminate\Support\Manager;

class WeatherManager extends Manager
{
    /**
     * Create an instance of the OpenWeatherMap Driver.
     *
     * @return OpenWeatherMapDriver
     */
    public function createOpenWeatherMapDriver()
    {
        return new OpenWeatherMapDriver();
    }

    /**
     * Get the default driver name.
     *
     * @return string
     */
    public function getDefaultDriver()
    {
        return config('weather-api.driver', 'openWeatherMap');
    }
}
