<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\WeatherService;

class WeatherController extends Controller
{
    public function index(){
        return view('index');
    }

    // função para pesquisar o clima da cidade

    public function show(Request $request, WeatherService $service)
{
    $weather = $service->getWeatherResponse($request->city);

    return view('weather', compact('weather'));
}

}
