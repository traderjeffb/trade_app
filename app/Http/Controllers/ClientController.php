<?php

namespace App\Http\Controllers;
//use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class ClientController extends Controller
{
     public function getAllPrices(){

     	$response = Http::get("https://www.alphavantage.co/query?function=TIME_SERIES_DAILY&symbol=AAPL&outputsize=full&apikey=VBVT9P94JCTSHO29");

     	return $response->json();
     	$collection=collect($response);
     	$uniqueDate=$collection->unique('date');
     	dd($response);
     }

          public function Past52WeekHiLow(){

     	$response = Http::get("https://www.alphavantage.co/query?function=TIME_SERIES_DAILY&symbol=AAPL&outputsize=full&apikey=VBVT9P94JCTSHO29");

     	$collection=collect($response);
     	$myArray=(json_decode($response,true));
     	print_r($myArray["Time Series (Daily)"]["2020-10-09"]["1. open"]);

     	}
     }



