<!DOCTYPE html>
<html>
<head>
	<title>POST FOR AVAILABLE CAR</title>
</head>
<body>

	<h2>POST FOR AVAILABLE CAR</h2>

	<a href="{{route('login.index')}}">Back</a> |
	

<form method="post">
	@csrf
	<table border="0">
		<tr>
				<td> CAR MODEL</td>
				<td><input type="text" name="name" required></td>
			</tr>
		
		
		<tr>
			<td>Price</td>
			<td><input type="text" name="price" required></td>
		</tr>
		
		<tr>
		<td>CAR Type</td>
			
		</tr>
		<tr>
			<td><input type="radio" name="type" value="private">private car</td>
				<td><input type="radio" name="type" value="pickup">pickup</td>
				<td><input type="radio" name="type" value="micro">micro</td>
		</tr>
		
		
		
			<td></td>
			<td><input type="submit" name="save" value="post"></td>
		</tr>
</table>
</form>
</body>
</html>