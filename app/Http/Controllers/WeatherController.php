<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function index(){
        return view('index');
    }

    // função para pesquisar o clima da cidade

    public function show(){
        return view('weather');
    }
}
