<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use \App\Enums\WeatherType;
use \App\Services\ChatGPTService;

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
            'temp'      => round($data['current']['temp_c']),
            'condition' => $data['current']['condition']['text'],
            'feelslike' => round($data['current']['feelslike_c']),
            'humidity'  => $data['current']['humidity'],
            'max_temp'  => round($data['forecast']['forecastday'][0]['day']['maxtemp_c']),
            'min_temp'  => round($data['forecast']['forecastday'][0]['day']['mintemp_c']),
            'wind_kph'   => $data['current']['wind_kph'],
            'pressure_mb' => $data['current']['pressure_mb'],
            'vis_km'     => $data['current']['vis_km'],
            'sunrise' => $data['forecast']['forecastday'][0]['astro']['sunrise'],
            'sunset' => $data['forecast']['forecastday'][0]['astro']['sunset'],
            'day_one' => [
                'date' => date_format(date_create($data['forecast']['forecastday'][0]['date']), 'd/m/Y'),
                'max_temp' => round($data['forecast']['forecastday'][0]['day']['maxtemp_c']),
                'min_temp' => round($data['forecast']['forecastday'][0]['day']['mintemp_c']),
                'condition' => $data['forecast']['forecastday'][0]['day']['condition']['text'],
            ],
            'day_two' => [
                'date' => date_format(date_create($data['forecast']['forecastday'][1]['date']), 'd/m/Y'),
                'max_temp' => round($data['forecast']['forecastday'][1]['day']['maxtemp_c']),
                'min_temp' => round($data['forecast']['forecastday'][1]['day']['mintemp_c']),
                'condition' => $data['forecast']['forecastday'][1]['day']['condition']['text'],
            ],
            'day_three' => [
                'date' => date_format(date_create($data['forecast']['forecastday'][2]['date']), 'd/m/Y'),
                'max_temp' => round($data['forecast']['forecastday'][2]['day']['maxtemp_c']),
                'min_temp' => round($data['forecast']['forecastday'][2]['day']['mintemp_c']),
                'condition' => $data['forecast']['forecastday'][2]['day']['condition']['text'],
            ],
            'day_four' => [
                'date' => date_format(date_create($data['forecast']['forecastday'][3]['date']), 'd/m/Y'),
                'max_temp' => round($data['forecast']['forecastday'][3]['day']['maxtemp_c']),
                'min_temp' => round($data['forecast']['forecastday'][3]['day']['mintemp_c']),
                'condition' => $data['forecast']['forecastday'][3]['day']['condition']['text'],
            ],
            'day_five' => [
                'date' => date_format(date_create($data['forecast']['forecastday'][4]['date']), 'd/m/Y'),
                'max_temp' => round($data['forecast']['forecastday'][4]['day']['maxtemp_c']),
                'min_temp' => round($data['forecast']['forecastday'][4]['day']['mintemp_c']),
                'condition' => $data['forecast']['forecastday'][4]['day']['condition']['text'],
            ]
        ];
    }
}
