<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
	    protected $fillable = [
        'ticker',
        'ticker_news',
        'opening_trade_price',
        'closing_trade_price',
        'long_or_short',
        'open_trade_profit_loss',
        'closed_trade_proift_loss',
    ];

}
