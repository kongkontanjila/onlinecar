
<!DOCTYPE html>
<html>
<head>
	<title>Delete Employeer</title>
</head>
<body>

	<h2>Delete Employeer</h2>

	<a href="/stdList">Back</a> |
	<a href="/logout">logout</a>

<form method="post">
	@csrf
	<table border="0">
		<tr>
			<td>Id :</td>
			<td>{{$std['id']}}</td>
		</tr>
		<tr>
			<td>Employeer name :</td>
			<td>{{$std['ename']}}</td>
		</tr>
		<tr>
			<td>Company Name :</td>
			<td>{{$std['cname']}}</td>
		</tr>
		<tr>
			<td>Contact number :</td>
			<td>{{$std['number']}}</td>
		</tr>
		
		<tr>
			<td>User name :</td>
			<td>{{$std['username']}}</td>
		</tr>
		
</table>
	<h3>Are you sure?</h3>
	<input type="submit" name="delete" value="Confirm">
</form>
</body>
</html>