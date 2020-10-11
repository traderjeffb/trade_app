<?php

namespace App\Http\Controllers;
//Illuminate\Http\Request;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
     public function getAllPrices(){

     	$response = Http::get("https://www.alphavantage.co/query?function=TIME_SERIES_DAILY_ADJUSTED&symbol=AAPL&outputsize=full&apikey=VBVT9P94JCTSHO29");

     	return $response->json();
     	$collection=collect($response);
     	$uniqueDate=$collection->unique('date');
     	dd($response);
     	return view('pricesIndex');
     }

}
