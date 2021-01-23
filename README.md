## About Project

This application  is a sample project for interview purposes.

Application uses external OpenWeatherMap API to fetch weather forecast for selected city.

Fetched data are cached for 60 seconds, so external API endpoint is called only once per minute.

It could be a good idea to move code related to fetching weather data to separate project, for example some Composer package, to maintain it separately and install easily in other projects.

## Installation

```
composer install
npm install
npm run dev
cp .env.example .env
php artisan key:generate
```

Fill OPEN_WEATHER_API_KEY in .env file with OpenWeatherMap API Key.

Database is not needed.

## Demo access

Deployed application is temporarily available under address http://139.59.213.101.
