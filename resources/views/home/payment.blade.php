<!DOCTYPE html>
<html>
<head>
	<title>ReGISTRATION FORM</title>
</head>
<body>

	<h2>Payment Section</h2>

	<a href="{{route('home.index')}}">Back</a> |
	

<form method="post">
	@csrf
	<table border="0">
		<tr>
				<td>Product Name</td>
				<td>{{$rent['name']}}</td>
			</tr>
		
		<tr>
			<td>PRICE</td>
			<td>{{$rent['price']}}</td>
		</tr>
		
		
		<tr>
		<td>Payment Method</td>
			
		</tr>
		<tr>
			<td><input type="radio" name="type" value="cash">CASH</td>
				<td><input type="radio" name="type" value="credit">CREDIT</td>
				<td><input type="radio" name="type" value="pay">PAY ORDER</td>
		</tr>
		
		<tr>
			<td></td>
			<td><input type="submit" name="save" value="pay"></td>
		</tr>
</table>
</form>
</body>
</html>