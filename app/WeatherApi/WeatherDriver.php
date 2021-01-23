<?php

namespace App\WeatherApi;

interface WeatherDriver
{
    /**
     * @param string $cityName
     * @param string $units
     * @return WeatherEntity[]
     */
    public function getWeatherForecast(string $cityName, string $units = 'imperial'): iterable;
}
