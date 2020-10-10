<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use DB;

class TransactionsController  extends Controller
{
    public function index(){

    	$transaction = Transaction::all();

    	return view('transaction.index',compact('transaction'));
    //	Route::view('/index', 'transactions', ['transactions' => '$transaction']);
    }

    public function create(){
    	return view('transaction.create');
    }

     public function store(Request $request){
    		
		$data= array();
		$data['ticker']= $request->ticker;
		$data['opening_trade_price']= $request->opening_trade_price;
		$data['closing_trade_price']= $request->closing_trade_price;
		$data['long_or_short']= $request->long_or_short;
		$data['open_trade_profit_loss']= $request->open_trade_profit_loss;
		$data['ticker_news']= $request->ticker_news ;

		$transaction = DB::table('transactions')->insert($data);

		return redirect()-> route('transactions') 
			->with('success','Transaction Created Successfully');
	}

}


?>