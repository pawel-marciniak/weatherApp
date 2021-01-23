<?php

namespace App\WeatherApi;

use Exception;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use RuntimeException;

class OpenWeatherMapDriver implements WeatherDriver
{
    /**
     * @param string $cityName
     * @param string $units
     * @return WeatherEntity[]
     */
    public function getWeatherForecast(string $cityName, string $units = 'imperial'): iterable
    {
        $returnData = [];

        try {
            $response = Http::get('api.openweathermap.org/data/2.5/forecast', [
                'q' => $cityName,
                'units' => $units,
                'appid' => config('weather-api.connections.openWeatherMap.api_key'),
            ]);

            $data = $response->object();

            if ($data->cod === '200') {
                $returnData = array_map(function ($weather) {
                    return new WeatherEntity(
                        $weather->dt_txt,
                        $weather->main->temp,
                        $weather->main->pressure,
                        $weather->main->humidity,
                    );
                }, $data->list);

                Cache::put("weather:{$cityName}:{$units}", $returnData);
            } else {
                throw new RuntimeException("Weather API error: {$data->message}");
            }
        } catch (Exception $e) {
            report($e);

            if (Cache::has("weather:{$cityName}:{$units}")) {
                $returnData = Cache::get("weather:{$cityName}:{$units}");
            }
        }

        return collect($returnData);
    }
}
