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
                                    <select v-model="city"
                                            id="city"
                                            class="form-control"
                                            :disabled="loading"
                                    >
                                        <option value="New York">New York</option>
                                        <option value="Washington">Washington</option>
                                        <option value="London">London</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <h3>Temperature</h3>
                        <temperature-chart v-if="temperatureData"
                                           :chart-data="temperatureData"
                                           class="weather-chart"
                        />

                        <h3>Pressure</h3>
                        <pressure-chart v-if="pressureData"
                                        :chart-data="pressureData"
                                        class="weather-chart"
                        />

                        <h3>Humidity</h3>
                        <humidity-chart v-if="humidityData"
                                        :chart-data="humidityData"
                                        class="weather-chart"
                        />
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
    import axios from 'axios';

    export default {
        components: {
            HumidityChart,
            PressureChart,
            TemperatureChart
        },

        data() {
            return {
                city: 'New York',
                units: 'imperial',
                temperatureData: null,
                pressureData: null,
                humidityData: null,
                loading: false,
            }
        },

        watch: {
            city() {
                this.fetchWeatherData();
            }
        },

        mounted() {
            this.fetchWeatherData();
        },

        methods: {
            fetchWeatherData() {
                this.loading = true;

                axios.get('/api/weather', {
                    params: {
                        city: this.city,
                        units: this.units,
                    }
                }).then(({ data }) => {
                    this.fillData(data.data);
                }).finally(() => {
                    this.loading = false;
                });
            },
            fillData(weatherData) {
                const labels = weatherData.map(weather => weather.time);
                const temperature = weatherData.map((weather) => weather.temperature);
                const pressure = weatherData.map((weather) => weather.pressure);
                const humidity = weatherData.map((weather) => weather.humidity);

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
        }
    }
</script>

<style scoped>
    .weather-chart {
        height: 300px;
    }
</style>
