<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id('transaction_id');
            $table->string('ticker');
            $table->string('ticker_news');
            $table->decimal('opening_trade_price');
            $table->decimal('closing_trade_price');
            $table->string('long_or_short');
            $table->decimal('open_trade_profit_loss');
            $table->decimal('closed_trade_profit_loss');
            $table->decimal('account_opening_balanace');
            $table->decimal('account_current_balance');
            $table->decimal('total_open_profit_loss');
            $table->decimal('total_closed_profit_loss');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
