@extends('transaction.layout')


@section('content')

<div class="row" style="padding-top: 50px;">
	<div class="pull-left">
		<h2>Details Transaction<h2>
	</div>

	<div class="pull-right">
		<a class="btn btn-success" href="{{ url('transactions') }}">Back<a/>
	</div>
</div>

<div class="row">
	<div class="col-xs-12 col-md-12">
		<div class="form-group">
			<strong>Transaction Id:</strong>
				{{ $data->transaction_id}}
		</div>
	</div>

		<div class="col-xs-12 col-md-12">
		<div class="form-group">
			<strong>Ticker: </strong>
				{{ $data->ticker}}
		</div>
	</div>

		<div class="col-xs-12 col-md-12">
		<div class="form-group">
			<strong>Ticker News: </strong>
				{{ $data->ticker_news}}
		</div>
	</div>

		<div class="col-xs-12 col-md-12">
		<div class="form-group">
			<strong>Opening Price: </strong>
				{{ $data->opening_trade_price}}
		</div>
	</div>

		<div class="col-xs-12 col-md-12">
		<div class="form-group">
			<strong>Closing Price: </strong>
				{{ $data->closing_trade_price}}
		</div>
	</div>

		<div class="col-xs-12 col-md-12">
		<div class="form-group">
			<strong>Long/Short: </strong>
				{{ $data->long_or_short}}
		</div>
	</div>

		<div class="col-xs-12 col-md-12">
		<div class="form-group">
			<strong>Open Trade Profit/Loss: </strong>
				{{ $data->open_trade_profit_loss}}
		</div>
	</div>

			<div class="col-xs-12 col-md-12">
		<div class="form-group">
			<strong>Closed Trade Profit/Loss: </strong>
				{{ $data->closed_trade_profit_loss}}
		</div>
	</div>

</div>


@endsection