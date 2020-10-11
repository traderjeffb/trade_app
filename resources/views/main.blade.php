<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row" >
			<h1>This will be the landing page--will add navagation and css<h1/>
			<a class="btn btn-info" href="{{ url('transactions') }}">See Index of Transactions</a>
			<a class="btn btn-info" href="{{ url('getAllPrices') }}">Get All Prices</a>
			<a class="btn btn-info" href="{{ url('Past52WeekHiLow') }}">Get 52 week High/Low</a>
		</div>
		
	</div>
</body>
</html>
