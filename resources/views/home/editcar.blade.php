
<!DOCTYPE html>
<html>
<head>
	<title>Edit CAR INFO</title>
</head>
<body>

	<h2>Edit CAR INFO</h2>

	<a href="/stdList">Employee List</a> |
	<a href="/logout">logout</a>

<form method="post">
	@csrf
	<table border="0">
		<tr>
			<td>Id</td>
			<td>{{$car['id']}}</td>
		</tr>
		<tr>
			<td> Car Model</td>
			<td><input type="text" name="name" value="{{$car['name']}}"></td>
		</tr>
		
		
		<tr>
			<td>Price</td>
			<td><input type="text" name="price" value="{{$car['price']}}"></td>
		</tr>
		<tr>
		<td>CAR Type</td>
			
		</tr>
		
		<tr>
			<td><input type="radio" name="type" value="private">private car</td>
				<td><input type="radio" name="type" value="pickup">pickup</td>
				<td><input type="radio" name="type" value="micro">micro</td>
		</tr>
		
		
		
		<tr>
			<td></td>
			<td><input type="submit" name="save" value="Save"></td>
		</tr>
</table>
</form>
</body>
</html>