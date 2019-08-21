<!DOCTYPE html>
<html>
<head>
	<title>orderlsit</title>
</head>
<body>

	<h2>Order List:</h2>
	
	<a href="/home">Back</a> |
	<a href="/logout">logout</a>

	<table border="1">
		<tr>
			<td>CaR ID</td>
			<td>CAR MODEL</td>
			<td>PRICE</td>
			<td>TYPE</td>
			<td>STATUS</td>
			
		</tr>
		@foreach($car as $value)
		<tr>
			<td>{{$value['id']}}</td>
			<td>{{$value['name']}}</td>
			<td>{{$value['price']}}</td>
			<td>{{$value['type']}}</td>
			<td>
				<a href="/history/{{$value['id']}}">Finalize</a> |
				<a href="/cancel/{{$value['id']}}">cancel order</a> |
				
				
			</td>
		</tr>
		@endforeach

</table>

</body>
</html>