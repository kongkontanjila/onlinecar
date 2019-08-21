<!DOCTYPE html>
<html>
<head>
	<title>Available PIckup </title>
</head>
<body>

	<h2> Pickup List:</h2>
	
	<a href="/home">Back</a> |
	<a href="/logout">logout</a>

	<table border="1">
		<tr>
			<td>CaR ID</td>
			<td>CAR MODEL</td>
			<td>PRICE</td>
			<td>TYPE</td>
			
		</tr>
		@foreach($private as $value)
		<tr>
			<td>{{$value['id']}}</td>
			<td>{{$value['name']}}</td>
			<td>{{$value['price']}}</td>
			<td>{{$value['type']}}</td>
			<td>
				<a href="/editcar/{{$value['id']}}">Edit</a> |
				<a href="/deletecar/{{$value['id']}}">Delete</a> |
				
			</td>
		</tr>
		@endforeach

</table>

</body>
</html>