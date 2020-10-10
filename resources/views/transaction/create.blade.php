@extends('transaction.layout')


@section('content')

<div class="row" style="padding-top: 50px;">
	<div class="pull-left">
		<h2>Add New Ticker<h2>
	</div>

	<div class="pull-right">
		<a class="btn btn-success" href="{{ url('transactions') }}">Back<a/>
	</div>
</div>


<form action="{{ url('store') }}" method="POST" enctype="multipart/form-data">
	@csrf

	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<strong>Ticker:</strong>
			<input type="text" name="ticker" class="form-control" placeholder="Ticker">
		</div>
	</div>

		<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<strong>Opening Trade Price:</strong>
			<input type="text" name="opening_trade_price" class="form-control" placeholder="Opening Trade Price">
		</div>
	</div>

	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<strong>Closing Trade Price:</strong>
			<input type="text" name="closing_trade_price" class="form-control" placeholder="Closing Trade Price">
		</div>
	</div>

	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
			<strong>Long or Short:</strong>
			<input type="text" name="long_or_short" class="form-control" placeholder="Long or Short">
		</div>
	</div>

	<div class="col-xs-6 col-sm-6 col-md-6">
		<div class="form-group">
				<strong>Open Trade Profit/Loss</strong>
				<input type="text" name="open_trade_profit_loss" class="form-control" placeholder="Open Trade Profit/Loss">
		</div>
	</div>

		<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Stock News:</strong>
			<textarea class="form-control" style = "height: 150px" name="ticker_news"></textarea>
		</div>
	</div>

	<div class="col-xs-12 col-sm-12 col-md-12">
		<button type="submit">Submit</button>
	</div>
	

</form>



@endsection