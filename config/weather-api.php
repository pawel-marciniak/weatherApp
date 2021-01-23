<?php

return [
    'driver' => 'openWeatherMap',

    'cities' => ['New York', 'Washington', 'London'],

    'connections' => [
        'openWeatherMap' => [
            'api_key' => env('OPEN_WEATHER_API_KEY')
        ]
    ]
];
