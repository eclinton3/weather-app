<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CityController extends Controller
{
    public function main(Request $request)
    {
        $city = $request->input('name');

        $location = Http::get("https://api.openweathermap.org/data/2.5/forecast?q=" . $city . "&appid=9365c344db634dba02fa9cfd1992a052");

        return view('welcome');
    }
}
