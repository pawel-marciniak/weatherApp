<?php

namespace App\WeatherApi;

use Exception;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use RuntimeException;

class OpenWeatherMapDriver implements WeatherDriver
{
    /**
     * Get weather forecast data
     *
     * @param string $cityName
     * @param string $units
     * @return WeatherEntity[]
     */
    public function getWeatherForecast(string $cityName, string $units = 'imperial'): iterable
    {
        $returnData = Cache::remember("weather:{$cityName}:{$units}", 60, function () use ($cityName, $units) {
            $weatherData = [];

            try {
                $data = $this->fetchData($cityName, $units);

                if ($data->cod === '200') {
                    $weatherData = $this->mapData($data->list);

                    Cache::put("spareWeather:{$cityName}:{$units}", $weatherData);
                } else {
                    throw new RuntimeException("Weather API error: {$data->message}");
                }
            } catch (Exception $e) {
                report($e);

                if (Cache::has("spareWeather:{$cityName}:{$units}")) {
                    $weatherData = Cache::get("spareWeather:{$cityName}:{$units}");
                }
            }

            return $weatherData;
        });

        return collect($returnData);
    }

    /**
     * Fetch data from external API
     *
     * @param string $cityName
     * @param string $units
     * @return object
     */
    protected function fetchData(string $cityName, string $units = 'imperial'): object
    {
        $response = Http::get('api.openweathermap.org/data/2.5/forecast', [
            'q' => $cityName,
            'units' => $units,
            'appid' => config('weather-api.connections.openWeatherMap.api_key'),
        ]);

        return $response->object();
    }

    /**
     * Map data to expected format
     *
     * @param array $rawWeatherData
     * @return array
     */
    protected function mapData(array $rawWeatherData): array
    {
        return array_map(function ($weather) {
            return new WeatherEntity(
                $weather->dt_txt,
                $weather->main->temp,
                $weather->main->pressure,
                $weather->main->humidity,
            );
        }, $rawWeatherData);
    }
}
