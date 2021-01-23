<template>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8 p-0">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="city">City</label>
                                    <select id="city" class="form-control">
                                        <option>New York</option>
                                        <option>Washington</option>
                                        <option>London</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <temperature-chart :chart-data="temperatureData" class="weather-chart" />

                        <pressure-chart :chart-data="pressureData" class="weather-chart" />

                        <humidity-chart :chart-data="humidityData" class="weather-chart" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import TemperatureChart from './charts/TemperatureChart';
    import PressureChart from './charts/PressureChart';
    import HumidityChart from './charts/HumidityChart';

    export default {
        components: {
            HumidityChart,
            PressureChart,
            TemperatureChart
        },

        data() {
            return {
                temperatureData: null,
                pressureData: null,
                humidityData: null,
                weatherData: {
                    "cod": "200",
                    "message": 0,
                    "cnt": 40,
                    "list": [
                        {
                            "dt": 1611392400,
                            "main": {
                                "temp": 33.75,
                                "feels_like": 27.7,
                                "temp_min": 33.75,
                                "temp_max": 35.29,
                                "pressure": 994,
                                "sea_level": 994,
                                "grnd_level": 991,
                                "humidity": 89,
                                "temp_kf": -0.86
                            },
                            "weather": [
                                {
                                    "id": 803,
                                    "main": "Clouds",
                                    "description": "broken clouds",
                                    "icon": "04d"
                                }
                            ],
                            "clouds": {
                                "all": 68
                            },
                            "wind": {
                                "speed": 4.09,
                                "deg": 265
                            },
                            "visibility": 10000,
                            "pop": 0,
                            "sys": {
                                "pod": "d"
                            },
                            "dt_txt": "2021-01-23 09:00:00"
                        },
                        {
                            "dt": 1611403200,
                            "main": {
                                "temp": 38.19,
                                "feels_like": 30.43,
                                "temp_min": 38.19,
                                "temp_max": 39.81,
                                "pressure": 995,
                                "sea_level": 995,
                                "grnd_level": 991,
                                "humidity": 75,
                                "temp_kf": -0.9
                            },
                            "weather": [
                                {
                                    "id": 802,
                                    "main": "Clouds",
                                    "description": "scattered clouds",
                                    "icon": "03d"
                                }
                            ],
                            "clouds": {
                                "all": 42
                            },
                            "wind": {
                                "speed": 7.18,
                                "deg": 295
                            },
                            "visibility": 10000,
                            "pop": 0,
                            "sys": {
                                "pod": "d"
                            },
                            "dt_txt": "2021-01-23 12:00:00"
                        },
                        {
                            "dt": 1611414000,
                            "main": {
                                "temp": 40.12,
                                "feels_like": 30.72,
                                "temp_min": 40.12,
                                "temp_max": 40.66,
                                "pressure": 995,
                                "sea_level": 995,
                                "grnd_level": 992,
                                "humidity": 69,
                                "temp_kf": -0.3
                            },
                            "weather": [
                                {
                                    "id": 600,
                                    "main": "Snow",
                                    "description": "light snow",
                                    "icon": "13d"
                                }
                            ],
                            "clouds": {
                                "all": 18
                            },
                            "wind": {
                                "speed": 10.02,
                                "deg": 297
                            },
                            "visibility": 10000,
                            "pop": 0.39,
                            "snow": {
                                "3h": 0.14
                            },
                            "sys": {
                                "pod": "d"
                            },
                            "dt_txt": "2021-01-23 15:00:00"
                        },
                        {
                            "dt": 1611424800,
                            "main": {
                                "temp": 37.6,
                                "feels_like": 28,
                                "temp_min": 37.6,
                                "temp_max": 37.63,
                                "pressure": 996,
                                "sea_level": 996,
                                "grnd_level": 993,
                                "humidity": 73,
                                "temp_kf": -0.02
                            },
                            "weather": [
                                {
                                    "id": 800,
                                    "main": "Clear",
                                    "description": "clear sky",
                                    "icon": "01n"
                                }
                            ],
                            "clouds": {
                                "all": 7
                            },
                            "wind": {
                                "speed": 10.11,
                                "deg": 290
                            },
                            "visibility": 10000,
                            "pop": 0.21,
                            "sys": {
                                "pod": "n"
                            },
                            "dt_txt": "2021-01-23 18:00:00"
                        },
                        {
                            "dt": 1611435600,
                            "main": {
                                "temp": 36.12,
                                "feels_like": 26.42,
                                "temp_min": 36.12,
                                "temp_max": 36.12,
                                "pressure": 997,
                                "sea_level": 997,
                                "grnd_level": 994,
                                "humidity": 78,
                                "temp_kf": 0
                            },
                            "weather": [
                                {
                                    "id": 800,
                                    "main": "Clear",
                                    "description": "clear sky",
                                    "icon": "01n"
                                }
                            ],
                            "clouds": {
                                "all": 0
                            },
                            "wind": {
                                "speed": 10.36,
                                "deg": 294
                            },
                            "visibility": 10000,
                            "pop": 0,
                            "sys": {
                                "pod": "n"
                            },
                            "dt_txt": "2021-01-23 21:00:00"
                        },
                        {
                            "dt": 1611446400,
                            "main": {
                                "temp": 34.41,
                                "feels_like": 25.5,
                                "temp_min": 34.41,
                                "temp_max": 34.41,
                                "pressure": 999,
                                "sea_level": 999,
                                "grnd_level": 995,
                                "humidity": 84,
                                "temp_kf": 0
                            },
                            "weather": [
                                {
                                    "id": 800,
                                    "main": "Clear",
                                    "description": "clear sky",
                                    "icon": "01n"
                                }
                            ],
                            "clouds": {
                                "all": 0
                            },
                            "wind": {
                                "speed": 8.99,
                                "deg": 278
                            },
                            "visibility": 10000,
                            "pop": 0,
                            "sys": {
                                "pod": "n"
                            },
                            "dt_txt": "2021-01-24 00:00:00"
                        },
                        {
                            "dt": 1611457200,
                            "main": {
                                "temp": 33.33,
                                "feels_like": 26.28,
                                "temp_min": 33.33,
                                "temp_max": 33.33,
                                "pressure": 999,
                                "sea_level": 999,
                                "grnd_level": 996,
                                "humidity": 87,
                                "temp_kf": 0
                            },
                            "weather": [
                                {
                                    "id": 800,
                                    "main": "Clear",
                                    "description": "clear sky",
                                    "icon": "01n"
                                }
                            ],
                            "clouds": {
                                "all": 0
                            },
                            "wind": {
                                "speed": 5.66,
                                "deg": 270
                            },
                            "visibility": 10000,
                            "pop": 0,
                            "sys": {
                                "pod": "n"
                            },
                            "dt_txt": "2021-01-24 03:00:00"
                        },
                        {
                            "dt": 1611468000,
                            "main": {
                                "temp": 32.45,
                                "feels_like": 26.85,
                                "temp_min": 32.45,
                                "temp_max": 32.45,
                                "pressure": 999,
                                "sea_level": 999,
                                "grnd_level": 996,
                                "humidity": 90,
                                "temp_kf": 0
                            },
                            "weather": [
                                {
                                    "id": 802,
                                    "main": "Clouds",
                                    "description": "scattered clouds",
                                    "icon": "03n"
                                }
                            ],
                            "clouds": {
                                "all": 33
                            },
                            "wind": {
                                "speed": 3.06,
                                "deg": 214
                            },
                            "visibility": 10000,
                            "pop": 0,
                            "sys": {
                                "pod": "n"
                            },
                            "dt_txt": "2021-01-24 06:00:00"
                        },
                        {
                            "dt": 1611478800,
                            "main": {
                                "temp": 34.77,
                                "feels_like": 27.16,
                                "temp_min": 34.77,
                                "temp_max": 34.77,
                                "pressure": 998,
                                "sea_level": 998,
                                "grnd_level": 994,
                                "humidity": 80,
                                "temp_kf": 0
                            },
                            "weather": [
                                {
                                    "id": 804,
                                    "main": "Clouds",
                                    "description": "overcast clouds",
                                    "icon": "04d"
                                }
                            ],
                            "clouds": {
                                "all": 100
                            },
                            "wind": {
                                "speed": 6.49,
                                "deg": 133
                            },
                            "visibility": 10000,
                            "pop": 0.02,
                            "sys": {
                                "pod": "d"
                            },
                            "dt_txt": "2021-01-24 09:00:00"
                        },
                        {
                            "dt": 1611489600,
                            "main": {
                                "temp": 36.41,
                                "feels_like": 26.62,
                                "temp_min": 36.41,
                                "temp_max": 36.41,
                                "pressure": 995,
                                "sea_level": 995,
                                "grnd_level": 992,
                                "humidity": 86,
                                "temp_kf": 0
                            },
                            "weather": [
                                {
                                    "id": 600,
                                    "main": "Snow",
                                    "description": "light snow",
                                    "icon": "13d"
                                }
                            ],
                            "clouds": {
                                "all": 100
                            },
                            "wind": {
                                "speed": 11.21,
                                "deg": 136
                            },
                            "visibility": 2077,
                            "pop": 0.55,
                            "snow": {
                                "3h": 0.76
                            },
                            "sys": {
                                "pod": "d"
                            },
                            "dt_txt": "2021-01-24 12:00:00"
                        },
                        {
                            "dt": 1611500400,
                            "main": {
                                "temp": 34.77,
                                "feels_like": 26.94,
                                "temp_min": 34.77,
                                "temp_max": 34.77,
                                "pressure": 993,
                                "sea_level": 993,
                                "grnd_level": 990,
                                "humidity": 94,
                                "temp_kf": 0
                            },
                            "weather": [
                                {
                                    "id": 601,
                                    "main": "Snow",
                                    "description": "snow",
                                    "icon": "13d"
                                }
                            ],
                            "clouds": {
                                "all": 100
                            },
                            "wind": {
                                "speed": 7.87,
                                "deg": 107
                            },
                            "visibility": 56,
                            "pop": 0.92,
                            "snow": {
                                "3h": 2.2
                            },
                            "sys": {
                                "pod": "d"
                            },
                            "dt_txt": "2021-01-24 15:00:00"
                        },
                        {
                            "dt": 1611511200,
                            "main": {
                                "temp": 35.02,
                                "feels_like": 28.8,
                                "temp_min": 35.02,
                                "temp_max": 35.02,
                                "pressure": 992,
                                "sea_level": 992,
                                "grnd_level": 989,
                                "humidity": 94,
                                "temp_kf": 0
                            },
                            "weather": [
                                {
                                    "id": 600,
                                    "main": "Snow",
                                    "description": "light snow",
                                    "icon": "13n"
                                }
                            ],
                            "clouds": {
                                "all": 100
                            },
                            "wind": {
                                "speed": 5.1,
                                "deg": 30
                            },
                            "visibility": 124,
                            "pop": 0.92,
                            "snow": {
                                "3h": 0.44
                            },
                            "sys": {
                                "pod": "n"
                            },
                            "dt_txt": "2021-01-24 18:00:00"
                        },
                        {
                            "dt": 1611522000,
                            "main": {
                                "temp": 34.9,
                                "feels_like": 25.21,
                                "temp_min": 34.9,
                                "temp_max": 34.9,
                                "pressure": 994,
                                "sea_level": 994,
                                "grnd_level": 990,
                                "humidity": 92,
                                "temp_kf": 0
                            },
                            "weather": [
                                {
                                    "id": 600,
                                    "main": "Snow",
                                    "description": "light snow",
                                    "icon": "13n"
                                }
                            ],
                            "clouds": {
                                "all": 100
                            },
                            "wind": {
                                "speed": 11.05,
                                "deg": 38
                            },
                            "visibility": 10000,
                            "pop": 0.4,
                            "snow": {
                                "3h": 0.19
                            },
                            "sys": {
                                "pod": "n"
                            },
                            "dt_txt": "2021-01-24 21:00:00"
                        },
                        {
                            "dt": 1611532800,
                            "main": {
                                "temp": 33.89,
                                "feels_like": 25.52,
                                "temp_min": 33.89,
                                "temp_max": 33.89,
                                "pressure": 997,
                                "sea_level": 997,
                                "grnd_level": 994,
                                "humidity": 90,
                                "temp_kf": 0
                            },
                            "weather": [
                                {
                                    "id": 804,
                                    "main": "Clouds",
                                    "description": "overcast clouds",
                                    "icon": "04n"
                                }
                            ],
                            "clouds": {
                                "all": 90
                            },
                            "wind": {
                                "speed": 8.32,
                                "deg": 5
                            },
                            "visibility": 10000,
                            "pop": 0.08,
                            "sys": {
                                "pod": "n"
                            },
                            "dt_txt": "2021-01-25 00:00:00"
                        },
                        {
                            "dt": 1611543600,
                            "main": {
                                "temp": 32.54,
                                "feels_like": 25.3,
                                "temp_min": 32.54,
                                "temp_max": 32.54,
                                "pressure": 1001,
                                "sea_level": 1001,
                                "grnd_level": 997,
                                "humidity": 91,
                                "temp_kf": 0
                            },
                            "weather": [
                                {
                                    "id": 801,
                                    "main": "Clouds",
                                    "description": "few clouds",
                                    "icon": "02n"
                                }
                            ],
                            "clouds": {
                                "all": 16
                            },
                            "wind": {
                                "speed": 6.06,
                                "deg": 351
                            },
                            "visibility": 10000,
                            "pop": 0,
                            "sys": {
                                "pod": "n"
                            },
                            "dt_txt": "2021-01-25 03:00:00"
                        },
                        {
                            "dt": 1611554400,
                            "main": {
                                "temp": 31.51,
                                "feels_like": 25.2,
                                "temp_min": 31.51,
                                "temp_max": 31.51,
                                "pressure": 1004,
                                "sea_level": 1004,
                                "grnd_level": 1001,
                                "humidity": 93,
                                "temp_kf": 0
                            },
                            "weather": [
                                {
                                    "id": 800,
                                    "main": "Clear",
                                    "description": "clear sky",
                                    "icon": "01n"
                                }
                            ],
                            "clouds": {
                                "all": 8
                            },
                            "wind": {
                                "speed": 4.29,
                                "deg": 300
                            },
                            "visibility": 10000,
                            "pop": 0,
                            "sys": {
                                "pod": "n"
                            },
                            "dt_txt": "2021-01-25 06:00:00"
                        },
                        {
                            "dt": 1611565200,
                            "main": {
                                "temp": 31.48,
                                "feels_like": 24.58,
                                "temp_min": 31.48,
                                "temp_max": 31.48,
                                "pressure": 1006,
                                "sea_level": 1006,
                                "grnd_level": 1003,
                                "humidity": 90,
                                "temp_kf": 0
                            },
                            "weather": [
                                {
                                    "id": 800,
                                    "main": "Clear",
                                    "description": "clear sky",
                                    "icon": "01d"
                                }
                            ],
                            "clouds": {
                                "all": 0
                            },
                            "wind": {
                                "speed": 5.14,
                                "deg": 265
                            },
                            "visibility": 10000,
                            "pop": 0,
                            "sys": {
                                "pod": "d"
                            },
                            "dt_txt": "2021-01-25 09:00:00"
                        },
                        {
                            "dt": 1611576000,
                            "main": {
                                "temp": 35.87,
                                "feels_like": 29.07,
                                "temp_min": 35.87,
                                "temp_max": 35.87,
                                "pressure": 1007,
                                "sea_level": 1007,
                                "grnd_level": 1004,
                                "humidity": 78,
                                "temp_kf": 0
                            },
                            "weather": [
                                {
                                    "id": 800,
                                    "main": "Clear",
                                    "description": "clear sky",
                                    "icon": "01d"
                                }
                            ],
                            "clouds": {
                                "all": 2
                            },
                            "wind": {
                                "speed": 5.17,
                                "deg": 235
                            },
                            "visibility": 10000,
                            "pop": 0,
                            "sys": {
                                "pod": "d"
                            },
                            "dt_txt": "2021-01-25 12:00:00"
                        },
                        {
                            "dt": 1611586800,
                            "main": {
                                "temp": 37.92,
                                "feels_like": 30.79,
                                "temp_min": 37.92,
                                "temp_max": 37.92,
                                "pressure": 1007,
                                "sea_level": 1007,
                                "grnd_level": 1004,
                                "humidity": 76,
                                "temp_kf": 0
                            },
                            "weather": [
                                {
                                    "id": 801,
                                    "main": "Clouds",
                                    "description": "few clouds",
                                    "icon": "02d"
                                }
                            ],
                            "clouds": {
                                "all": 23
                            },
                            "wind": {
                                "speed": 6.06,
                                "deg": 225
                            },
                            "visibility": 10000,
                            "pop": 0,
                            "sys": {
                                "pod": "d"
                            },
                            "dt_txt": "2021-01-25 15:00:00"
                        },
                        {
                            "dt": 1611597600,
                            "main": {
                                "temp": 36.99,
                                "feels_like": 30.63,
                                "temp_min": 36.99,
                                "temp_max": 36.99,
                                "pressure": 1008,
                                "sea_level": 1008,
                                "grnd_level": 1005,
                                "humidity": 87,
                                "temp_kf": 0
                            },
                            "weather": [
                                {
                                    "id": 803,
                                    "main": "Clouds",
                                    "description": "broken clouds",
                                    "icon": "04n"
                                }
                            ],
                            "clouds": {
                                "all": 58
                            },
                            "wind": {
                                "speed": 5.32,
                                "deg": 256
                            },
                            "visibility": 10000,
                            "pop": 0,
                            "sys": {
                                "pod": "n"
                            },
                            "dt_txt": "2021-01-25 18:00:00"
                        },
                        {
                            "dt": 1611608400,
                            "main": {
                                "temp": 35.96,
                                "feels_like": 30.52,
                                "temp_min": 35.96,
                                "temp_max": 35.96,
                                "pressure": 1009,
                                "sea_level": 1009,
                                "grnd_level": 1006,
                                "humidity": 94,
                                "temp_kf": 0
                            },
                            "weather": [
                                {
                                    "id": 804,
                                    "main": "Clouds",
                                    "description": "overcast clouds",
                                    "icon": "04n"
                                }
                            ],
                            "clouds": {
                                "all": 96
                            },
                            "wind": {
                                "speed": 3.96,
                                "deg": 260
                            },
                            "visibility": 10000,
                            "pop": 0,
                            "sys": {
                                "pod": "n"
                            },
                            "dt_txt": "2021-01-25 21:00:00"
                        },
                        {
                            "dt": 1611619200,
                            "main": {
                                "temp": 34.83,
                                "feels_like": 29.44,
                                "temp_min": 34.83,
                                "temp_max": 34.83,
                                "pressure": 1010,
                                "sea_level": 1010,
                                "grnd_level": 1007,
                                "humidity": 94,
                                "temp_kf": 0
                            },
                            "weather": [
                                {
                                    "id": 804,
                                    "main": "Clouds",
                                    "description": "overcast clouds",
                                    "icon": "04n"
                                }
                            ],
                            "clouds": {
                                "all": 94
                            },
                            "wind": {
                                "speed": 3.56,
                                "deg": 279
                            },
                            "visibility": 715,
                            "pop": 0,
                            "sys": {
                                "pod": "n"
                            },
                            "dt_txt": "2021-01-26 00:00:00"
                        },
                        {
                            "dt": 1611630000,
                            "main": {
                                "temp": 34.77,
                                "feels_like": 28.81,
                                "temp_min": 34.77,
                                "temp_max": 34.77,
                                "pressure": 1011,
                                "sea_level": 1011,
                                "grnd_level": 1008,
                                "humidity": 92,
                                "temp_kf": 0
                            },
                            "weather": [
                                {
                                    "id": 804,
                                    "main": "Clouds",
                                    "description": "overcast clouds",
                                    "icon": "04n"
                                }
                            ],
                            "clouds": {
                                "all": 100
                            },
                            "wind": {
                                "speed": 4.43,
                                "deg": 274
                            },
                            "visibility": 10000,
                            "pop": 0,
                            "sys": {
                                "pod": "n"
                            },
                            "dt_txt": "2021-01-26 03:00:00"
                        },
                        {
                            "dt": 1611640800,
                            "main": {
                                "temp": 33.73,
                                "feels_like": 28.11,
                                "temp_min": 33.73,
                                "temp_max": 33.73,
                                "pressure": 1013,
                                "sea_level": 1013,
                                "grnd_level": 1009,
                                "humidity": 91,
                                "temp_kf": 0
                            },
                            "weather": [
                                {
                                    "id": 804,
                                    "main": "Clouds",
                                    "description": "overcast clouds",
                                    "icon": "04n"
                                }
                            ],
                            "clouds": {
                                "all": 94
                            },
                            "wind": {
                                "speed": 3.47,
                                "deg": 279
                            },
                            "visibility": 10000,
                            "pop": 0,
                            "sys": {
                                "pod": "n"
                            },
                            "dt_txt": "2021-01-26 06:00:00"
                        },
                        {
                            "dt": 1611651600,
                            "main": {
                                "temp": 33.67,
                                "feels_like": 27.45,
                                "temp_min": 33.67,
                                "temp_max": 33.67,
                                "pressure": 1014,
                                "sea_level": 1014,
                                "grnd_level": 1011,
                                "humidity": 91,
                                "temp_kf": 0
                            },
                            "weather": [
                                {
                                    "id": 804,
                                    "main": "Clouds",
                                    "description": "overcast clouds",
                                    "icon": "04d"
                                }
                            ],
                            "clouds": {
                                "all": 100
                            },
                            "wind": {
                                "speed": 4.54,
                                "deg": 248
                            },
                            "visibility": 10000,
                            "pop": 0,
                            "sys": {
                                "pod": "d"
                            },
                            "dt_txt": "2021-01-26 09:00:00"
                        },
                        {
                            "dt": 1611662400,
                            "main": {
                                "temp": 38.32,
                                "feels_like": 31.87,
                                "temp_min": 38.32,
                                "temp_max": 38.32,
                                "pressure": 1014,
                                "sea_level": 1014,
                                "grnd_level": 1011,
                                "humidity": 76,
                                "temp_kf": 0
                            },
                            "weather": [
                                {
                                    "id": 804,
                                    "main": "Clouds",
                                    "description": "overcast clouds",
                                    "icon": "04d"
                                }
                            ],
                            "clouds": {
                                "all": 100
                            },
                            "wind": {
                                "speed": 4.94,
                                "deg": 226
                            },
                            "visibility": 10000,
                            "pop": 0,
                            "sys": {
                                "pod": "d"
                            },
                            "dt_txt": "2021-01-26 12:00:00"
                        },
                        {
                            "dt": 1611673200,
                            "main": {
                                "temp": 41.14,
                                "feels_like": 34.57,
                                "temp_min": 41.14,
                                "temp_max": 41.14,
                                "pressure": 1013,
                                "sea_level": 1013,
                                "grnd_level": 1009,
                                "humidity": 78,
                                "temp_kf": 0
                            },
                            "weather": [
                                {
                                    "id": 804,
                                    "main": "Clouds",
                                    "description": "overcast clouds",
                                    "icon": "04d"
                                }
                            ],
                            "clouds": {
                                "all": 100
                            },
                            "wind": {
                                "speed": 6.08,
                                "deg": 235
                            },
                            "visibility": 10000,
                            "pop": 0,
                            "sys": {
                                "pod": "d"
                            },
                            "dt_txt": "2021-01-26 15:00:00"
                        },
                        {
                            "dt": 1611684000,
                            "main": {
                                "temp": 39.76,
                                "feels_like": 35.47,
                                "temp_min": 39.76,
                                "temp_max": 39.76,
                                "pressure": 1012,
                                "sea_level": 1012,
                                "grnd_level": 1009,
                                "humidity": 93,
                                "temp_kf": 0
                            },
                            "weather": [
                                {
                                    "id": 500,
                                    "main": "Rain",
                                    "description": "light rain",
                                    "icon": "10n"
                                }
                            ],
                            "clouds": {
                                "all": 100
                            },
                            "wind": {
                                "speed": 2.95,
                                "deg": 202
                            },
                            "visibility": 5711,
                            "pop": 0.98,
                            "rain": {
                                "3h": 2.4
                            },
                            "sys": {
                                "pod": "n"
                            },
                            "dt_txt": "2021-01-26 18:00:00"
                        },
                        {
                            "dt": 1611694800,
                            "main": {
                                "temp": 40.51,
                                "feels_like": 34.02,
                                "temp_min": 40.51,
                                "temp_max": 40.51,
                                "pressure": 1011,
                                "sea_level": 1011,
                                "grnd_level": 1007,
                                "humidity": 94,
                                "temp_kf": 0
                            },
                            "weather": [
                                {
                                    "id": 501,
                                    "main": "Rain",
                                    "description": "moderate rain",
                                    "icon": "10n"
                                }
                            ],
                            "clouds": {
                                "all": 100
                            },
                            "wind": {
                                "speed": 7.23,
                                "deg": 186
                            },
                            "visibility": 10000,
                            "pop": 1,
                            "rain": {
                                "3h": 3.46
                            },
                            "sys": {
                                "pod": "n"
                            },
                            "dt_txt": "2021-01-26 21:00:00"
                        },
                        {
                            "dt": 1611705600,
                            "main": {
                                "temp": 42.04,
                                "feels_like": 35.67,
                                "temp_min": 42.04,
                                "temp_max": 42.04,
                                "pressure": 1011,
                                "sea_level": 1011,
                                "grnd_level": 1008,
                                "humidity": 96,
                                "temp_kf": 0
                            },
                            "weather": [
                                {
                                    "id": 804,
                                    "main": "Clouds",
                                    "description": "overcast clouds",
                                    "icon": "04n"
                                }
                            ],
                            "clouds": {
                                "all": 100
                            },
                            "wind": {
                                "speed": 7.72,
                                "deg": 236
                            },
                            "visibility": 10000,
                            "pop": 0.8,
                            "sys": {
                                "pod": "n"
                            },
                            "dt_txt": "2021-01-27 00:00:00"
                        },
                        {
                            "dt": 1611716400,
                            "main": {
                                "temp": 40.12,
                                "feels_like": 34.72,
                                "temp_min": 40.12,
                                "temp_max": 40.12,
                                "pressure": 1010,
                                "sea_level": 1010,
                                "grnd_level": 1007,
                                "humidity": 97,
                                "temp_kf": 0
                            },
                            "weather": [
                                {
                                    "id": 804,
                                    "main": "Clouds",
                                    "description": "overcast clouds",
                                    "icon": "04n"
                                }
                            ],
                            "clouds": {
                                "all": 100
                            },
                            "wind": {
                                "speed": 5.41,
                                "deg": 254
                            },
                            "visibility": 10000,
                            "pop": 0,
                            "sys": {
                                "pod": "n"
                            },
                            "dt_txt": "2021-01-27 03:00:00"
                        },
                        {
                            "dt": 1611727200,
                            "main": {
                                "temp": 40.93,
                                "feels_like": 36.19,
                                "temp_min": 40.93,
                                "temp_max": 40.93,
                                "pressure": 1011,
                                "sea_level": 1011,
                                "grnd_level": 1008,
                                "humidity": 98,
                                "temp_kf": 0
                            },
                            "weather": [
                                {
                                    "id": 804,
                                    "main": "Clouds",
                                    "description": "overcast clouds",
                                    "icon": "04n"
                                }
                            ],
                            "clouds": {
                                "all": 100
                            },
                            "wind": {
                                "speed": 4.61,
                                "deg": 242
                            },
                            "visibility": 8580,
                            "pop": 0,
                            "sys": {
                                "pod": "n"
                            },
                            "dt_txt": "2021-01-27 06:00:00"
                        },
                        {
                            "dt": 1611738000,
                            "main": {
                                "temp": 42.8,
                                "feels_like": 36.5,
                                "temp_min": 42.8,
                                "temp_max": 42.8,
                                "pressure": 1011,
                                "sea_level": 1011,
                                "grnd_level": 1008,
                                "humidity": 97,
                                "temp_kf": 0
                            },
                            "weather": [
                                {
                                    "id": 804,
                                    "main": "Clouds",
                                    "description": "overcast clouds",
                                    "icon": "04d"
                                }
                            ],
                            "clouds": {
                                "all": 100
                            },
                            "wind": {
                                "speed": 7.94,
                                "deg": 225
                            },
                            "visibility": 10000,
                            "pop": 0.1,
                            "sys": {
                                "pod": "d"
                            },
                            "dt_txt": "2021-01-27 09:00:00"
                        },
                        {
                            "dt": 1611748800,
                            "main": {
                                "temp": 44.29,
                                "feels_like": 38.97,
                                "temp_min": 44.29,
                                "temp_max": 44.29,
                                "pressure": 1010,
                                "sea_level": 1010,
                                "grnd_level": 1007,
                                "humidity": 96,
                                "temp_kf": 0
                            },
                            "weather": [
                                {
                                    "id": 500,
                                    "main": "Rain",
                                    "description": "light rain",
                                    "icon": "10d"
                                }
                            ],
                            "clouds": {
                                "all": 100
                            },
                            "wind": {
                                "speed": 6.69,
                                "deg": 201
                            },
                            "visibility": 10000,
                            "pop": 0.75,
                            "rain": {
                                "3h": 1.25
                            },
                            "sys": {
                                "pod": "d"
                            },
                            "dt_txt": "2021-01-27 12:00:00"
                        },
                        {
                            "dt": 1611759600,
                            "main": {
                                "temp": 47.95,
                                "feels_like": 42.1,
                                "temp_min": 47.95,
                                "temp_max": 47.95,
                                "pressure": 1006,
                                "sea_level": 1006,
                                "grnd_level": 1003,
                                "humidity": 96,
                                "temp_kf": 0
                            },
                            "weather": [
                                {
                                    "id": 500,
                                    "main": "Rain",
                                    "description": "light rain",
                                    "icon": "10d"
                                }
                            ],
                            "clouds": {
                                "all": 100
                            },
                            "wind": {
                                "speed": 9.1,
                                "deg": 201
                            },
                            "visibility": 10000,
                            "pop": 1,
                            "rain": {
                                "3h": 0.9
                            },
                            "sys": {
                                "pod": "d"
                            },
                            "dt_txt": "2021-01-27 15:00:00"
                        },
                        {
                            "dt": 1611770400,
                            "main": {
                                "temp": 50.27,
                                "feels_like": 43.84,
                                "temp_min": 50.27,
                                "temp_max": 50.27,
                                "pressure": 1002,
                                "sea_level": 1002,
                                "grnd_level": 999,
                                "humidity": 95,
                                "temp_kf": 0
                            },
                            "weather": [
                                {
                                    "id": 501,
                                    "main": "Rain",
                                    "description": "moderate rain",
                                    "icon": "10n"
                                }
                            ],
                            "clouds": {
                                "all": 100
                            },
                            "wind": {
                                "speed": 11.03,
                                "deg": 212
                            },
                            "visibility": 10000,
                            "pop": 1,
                            "rain": {
                                "3h": 3.17
                            },
                            "sys": {
                                "pod": "n"
                            },
                            "dt_txt": "2021-01-27 18:00:00"
                        },
                        {
                            "dt": 1611781200,
                            "main": {
                                "temp": 51.3,
                                "feels_like": 43.74,
                                "temp_min": 51.3,
                                "temp_max": 51.3,
                                "pressure": 999,
                                "sea_level": 999,
                                "grnd_level": 996,
                                "humidity": 93,
                                "temp_kf": 0
                            },
                            "weather": [
                                {
                                    "id": 500,
                                    "main": "Rain",
                                    "description": "light rain",
                                    "icon": "10n"
                                }
                            ],
                            "clouds": {
                                "all": 100
                            },
                            "wind": {
                                "speed": 13.24,
                                "deg": 221
                            },
                            "visibility": 10000,
                            "pop": 1,
                            "rain": {
                                "3h": 1.13
                            },
                            "sys": {
                                "pod": "n"
                            },
                            "dt_txt": "2021-01-27 21:00:00"
                        },
                        {
                            "dt": 1611792000,
                            "main": {
                                "temp": 53.01,
                                "feels_like": 43.23,
                                "temp_min": 53.01,
                                "temp_max": 53.01,
                                "pressure": 997,
                                "sea_level": 997,
                                "grnd_level": 994,
                                "humidity": 86,
                                "temp_kf": 0
                            },
                            "weather": [
                                {
                                    "id": 500,
                                    "main": "Rain",
                                    "description": "light rain",
                                    "icon": "10n"
                                }
                            ],
                            "clouds": {
                                "all": 100
                            },
                            "wind": {
                                "speed": 16.98,
                                "deg": 234
                            },
                            "visibility": 10000,
                            "pop": 1,
                            "rain": {
                                "3h": 0.66
                            },
                            "sys": {
                                "pod": "n"
                            },
                            "dt_txt": "2021-01-28 00:00:00"
                        },
                        {
                            "dt": 1611802800,
                            "main": {
                                "temp": 52.63,
                                "feels_like": 41.99,
                                "temp_min": 52.63,
                                "temp_max": 52.63,
                                "pressure": 995,
                                "sea_level": 995,
                                "grnd_level": 992,
                                "humidity": 81,
                                "temp_kf": 0
                            },
                            "weather": [
                                {
                                    "id": 500,
                                    "main": "Rain",
                                    "description": "light rain",
                                    "icon": "10n"
                                }
                            ],
                            "clouds": {
                                "all": 87
                            },
                            "wind": {
                                "speed": 17.65,
                                "deg": 237
                            },
                            "visibility": 10000,
                            "pop": 0.26,
                            "rain": {
                                "3h": 0.16
                            },
                            "sys": {
                                "pod": "n"
                            },
                            "dt_txt": "2021-01-28 03:00:00"
                        },
                        {
                            "dt": 1611813600,
                            "main": {
                                "temp": 52.39,
                                "feels_like": 41.67,
                                "temp_min": 52.39,
                                "temp_max": 52.39,
                                "pressure": 993,
                                "sea_level": 993,
                                "grnd_level": 990,
                                "humidity": 79,
                                "temp_kf": 0
                            },
                            "weather": [
                                {
                                    "id": 500,
                                    "main": "Rain",
                                    "description": "light rain",
                                    "icon": "10n"
                                }
                            ],
                            "clouds": {
                                "all": 88
                            },
                            "wind": {
                                "speed": 17.43,
                                "deg": 233
                            },
                            "visibility": 10000,
                            "pop": 0.3,
                            "rain": {
                                "3h": 0.34
                            },
                            "sys": {
                                "pod": "n"
                            },
                            "dt_txt": "2021-01-28 06:00:00"
                        }
                    ],
                    "city": {
                        "id": 2643743,
                        "name": "London",
                        "coord": {
                            "lat": 51.5085,
                            "lon": -0.1257
                        },
                        "country": "GB",
                        "population": 1000000,
                        "timezone": 0,
                        "sunrise": 1611388263,
                        "sunset": 1611419602
                    }
                }
            }
        },

        mounted() {
            this.fillData()
        },

        methods: {
            fillData() {
                const labels = this.weatherData.list.map((day) => {
                    let [date, time] = day.dt_txt.split(' ');
                    let [hours, minutes] = time.split(':')

                    return `${date} ${hours}:${minutes}`;
                });
                const temperature = this.weatherData.list.map((day) => day.main.temp);
                const pressure = this.weatherData.list.map((day) => day.main.pressure);
                const humidity = this.weatherData.list.map((day) => day.main.humidity);

                this.temperatureData = {
                    labels: labels,
                    datasets: [
                        {
                            label: 'Temperature',
                            borderColor: 'blue',
                            fill: false,
                            data: temperature
                        }
                    ]
                };

                this.pressureData = {
                    labels: labels,
                    datasets: [
                        {
                            label: 'Pressure',
                            borderColor: 'red',
                            fill: false,
                            data: pressure
                        }
                    ]
                };

                this.humidityData = {
                    labels: labels,
                    datasets: [
                        {
                            label: 'Humidity',
                            backgroundColor: 'lightblue',
                            data: humidity
                        }
                    ]
                };
            },
            getRandomInt() {
                return Math.floor(Math.random() * (50 - 5 + 1)) + 5
            }
        }
    }
</script>

<style scoped>
    .weather-chart {
        height: 300px;
    }
</style>
