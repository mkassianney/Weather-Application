<?php

use App\Http\Controllers\WeatherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    echo 'Hello World!';
});

Route::get('/index', [WeatherController::class, 'index']);

Route::get('/weather', [WeatherController::class, 'show']);
