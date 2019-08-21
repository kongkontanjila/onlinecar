<!DOCTYPE html>
<html>
<head>
	<title> Rent Car History</title>
</head>
<body>

	<h2>Car List:</h2>
	
	<a href="/home">Back</a> |
	<a href="/logout">logout</a>

	<table border="1">
		<tr>
			<td>CaR ID</td>
			<td>CAR MODEL</td>
			<td>PRICE</td>
			<td>TYPE</td>
			
		</tr>
		@foreach($car as $value)
		<tr>
			<td>{{$value['id']}}</td>
			<td>{{$value['name']}}</td>
			<td>{{$value['price']}}</td>
			<td>{{$value['type']}}</td>
			
		</tr>
		@endforeach

</table>

</body>
</html>