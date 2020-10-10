@extends('transaction.layout')

@section('content')
<br><br><br>

<div class="row" >

	<div class="col-lg-12 margin-tb">
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


	<table class="table table-bordered">
		<tr>
			<th width="150px">Ticker</th>
			<th width="100">Ticker News</th>
			<th width="150px">Opening Trade Price</th>
			<th width="50px">Closing Trade Price</th>
			<th width="100px">Long/Short</th>
			<th width="150px">Open P/L</th>
			<th width="50px">Closed P/L</th>
			<th width="350px">Modify Transactions</th>
		 </tr>

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
		</tr>

			@endforeach
		

	</table>
</div>
@endsection