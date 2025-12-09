<?php

namespace App\Enums;

enum WeatherType: string
{
    case SUNNY = 'sunny'; // ensolarado -> sol
    case RAINY = 'rainy'; // chuva -> nuvem de chuva
    case PARTLY_CLOUDY = 'partly_cloudy'; // parcialmente nublado -> nuvem com sol
    case LIGHT_DRIZZLE = 'light_drizzle'; // chuvisco leve -> nuvem de chuva
    case OVERCAST = 'overcast'; // nublado -> nuvem
    case STORMY = 'stormy'; // tempestade -> nuvem de chuva
    case SNOWY = 'snowy'; // nevando -> nuvem
    case FOGGY = 'foggy'; // nevoeiro -> nuvem
    case WINDY = 'windy'; // ventania -> outro

    // método para definir o tipo de clima a partir do 'contidion'.
    public static function fromString(string $condition): WeatherType{
        return match (strtolower($condition)){
            'sunny', 'clear', 'cloudless' => WeatherType::SUNNY,
            'rainy', 'rain' => WeatherType::RAINY,
            'partly cloudy', 'partially cloudy' => WeatherType::PARTLY_CLOUDY,
            'light drizzle', 'drizzle' => WeatherType::LIGHT_DRIZZLE,
            'overcast', 'cloudy' => WeatherType::OVERCAST,
            'stormy', 'thunderstorm' => WeatherType::STORMY,
            'snowy', 'snow' => WeatherType::SNOWY,
            'foggy', 'fog' => WeatherType::FOGGY,
            'windy', 'wind' => WeatherType::WINDY,
        };
    }

    // método que retorna o valor (string) do ícone que correspponde ao tipo de clima.
    public function getIconName(){
        return $this->value;
    }

    // método que retorna a descrição do clima em português.
    public function getDescription(): string {
        return match ($this) {
            WeatherType::SUNNY => 'Ensolarado',
            WeatherType::RAINY => 'Chuvoso',
            WeatherType::PARTLY_CLOUDY => 'Parcialmente nublado',
            WeatherType::LIGHT_DRIZZLE => 'Chuvisco leve',
            WeatherType::OVERCAST => 'Nublado',
            WeatherType::STORMY => 'Tempestade',
            WeatherType::SNOWY => 'Nevando',
            WeatherType::FOGGY => 'Nevoeiro',
            WeatherType::WINDY => 'Ventania',
        };
    }
}
