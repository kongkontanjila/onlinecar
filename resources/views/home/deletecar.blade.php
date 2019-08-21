
<!DOCTYPE html>
<html>
<head>
	<title>Delete CAR INFO</title>
</head>
<body>

	<h2>Delete this car information</h2>

	<a href="/stdList">Back</a> |
	<a href="/logout">logout</a>

<form method="post">
	@csrf
	<table border="0">
		<tr>
			<td>Id :</td>
			<td>{{$car['id']}}</td>
		</tr>
		<tr>
			<td>CAR MODEL :</td>
			<td>{{$car['name']}}</td>
		</tr>
		<tr>
			<td>PRICE :</td>
			<td>{{$car['price']}}</td>
		</tr>
		<tr>
			<td>Type :</td>
			<td>{{$car['type']}}</td>
		</tr>
		
		
		
</table>
	<h3>Are you sure?</h3>
	<input type="submit" name="delete" value="Confirm">
</form>
</body>
</html>