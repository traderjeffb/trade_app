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
	<form>
			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group">
					<strong>Please Enter Your Opening Balance Before Trading</strong>
					<input type="text" name="account_opening_balanace" class="form-control" placeholder="Opening Balance">
				</div>
			</div>
		</form>

		@if($message = Session::get('success'))
		<div class="alert alert-success">
			<p>{{ $message }}</p>
		</div>
		@endif


	<table class="table table-bordered">
		<tr>
			<th width="25px">Transaction Id</th>
			<th width="150px">Ticker</th>
			<th width="100">Ticker News</th>
			<th width="150px">Opening Trade Price</th>
			<th width="50px">Closing Trade Price</th>
			<th width="100px">Long/Short</th>
			<th width="150px">Open P/L</th>
			<th width="50px">Closed P/L</th>
			<th width="200px">Modify Transactions</th>
		 </tr>

		 <tr>
			@foreach($transaction as $trans)
			<td>{{ $trans->transaction_id }}</td>
			<td>{{ $trans->ticker }}</td>
			<td>{{ $trans->ticker_news }}</td>
			<td>{{ $trans->opening_trade_price }}</td>
			<td>{{ $trans->closing_trade_price }}</td>
			<td>{{ $trans->long_or_short }}</td>
			<td>{{ $trans->open_trade_profit_loss }}</td>
			<td>{{ $trans->closed_trade_proift_loss }}</td>
			<td>
				<a class="btn btn-info" href="{{ URL::to
				('details/transaction/'.$trans->transaction_id) }};">Details<a/>
			
				<a class="btn btn-primary" href="{{ URL::to
				('edit/transaction/'.$trans->transaction_id) }};">Edit<a/>

				<a class="btn btn-danger" href="{{ URL::to('delete/transaction/'.$trans->
					transaction_id) }}"onclick = "return confirm('Are you sure?')"">Delete<a/>	
			</td>
		</tr>

			@endforeach
		

	</table>
</div>
@endsection