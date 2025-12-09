<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class WeatherService
{
    public static function getWeatherResponse(string $city)
    {

        $response = Http::withoutVerifying()->get("https://api.weatherapi.com/v1/forecast.json", [
            'key'   => config('services.weather.key'),
            'q'   => $city,
            'days' => 5,
            'aqi' => 'no',
            'alerts' => 'no'
        ]);

        $data = $response->json();

        // Agora você filtra apenas o que quer expor ao front
        return [
            'city'      => $data['location']['name'],
            'country'   => $data['location']['country'],
            'temp'      => $data['current']['temp_c'],
            'condition' => $data['current']['condition']['text'],
            'feelslike' => $data['current']['feelslike_c'],
            'humidity'  => $data['current']['humidity'],
            'max_temp'  => $data['forecast']['forecastday'][0]['day']['maxtemp_c'],
            'min_temp'  => $data['forecast']['forecastday'][0]['day']['mintemp_c'],
            'wind_kph'   => $data['current']['wind_kph'],
            'pressure_mb' => $data['current']['pressure_mb'],
            'vis_km'     => $data['current']['vis_km'],
            'sunrise' => $data['forecast']['forecastday'][0]['astro']['sunrise'],
            'sunset' => $data['forecast']['forecastday'][0]['astro']['sunset'],
        ];
    }
}
