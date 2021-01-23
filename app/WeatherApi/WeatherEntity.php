<?php

namespace App\WeatherApi;

class WeatherEntity
{
    public $time;

    public $temperature;

    public $pressure;

    public $humidity;

    public function __construct(string $time, float $temperature, int $pressure, int $humidity)
    {
        $this->time = $time;
        $this->temperature = $temperature;
        $this->pressure = $pressure;
        $this->humidity = $humidity;
    }
}
