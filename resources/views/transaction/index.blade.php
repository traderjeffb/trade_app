@extends('transaction.layout')

@section('content')

<div class="row" style="padding-top: 50px;">
	<div class="pull-left">
		<h2>Transactions<h2>
	</div>

	<div class="pull-right">
		<a class="btn btn-success" href="{{ url('create') }}">New Trade<a/>
	</div>
</div>

@if($message = Session::get('success'))
<div class="alert alert-success">
	<p>{{ $message }}</p>
</div>
@endif

<div class="container">
	<table class="table table-bordered">
		<tr>

			<th width="50px">Ticker</th>
			<th width="100">Ticker News</th>
			<th width="50px">Opening Trade Price</th>
			<th width="50px">Closing Trade Price</th>
			<th width="100px">Long/Short</th>
			<th width="50px">Open P/L</th>
			<th width="50px">Closed P/L</th>
		 <tr>

			@foreach($transaction as $trans)
			<td>{{ $trans->ticker }}</td>
			<td>{{ $trans->ticker_news }}</td>
			<td>{{ $trans->opening_trade_price }}</td>
			<td>{{ $trans->closing_trade_price }}</td>
			<td>{{ $trans->long_or_short }}</td>
			<td>{{ $trans->open_trade_profit_loss }}</td>
			<td>{{ $trans->closed_trade_proift_loss }}</td>
			<td>
				<a class="btn btn-info" href="">Details<a/>
				<a class="btn btn-primary" href="">Edit<a/>
				<a class="btn btn-danger" href="">Delete<a/>	
			</td>
			<td>{!! "\r"  !!}</td>
			@endforeach
		</tr>

	</table>
</div>


</div>

@endsection