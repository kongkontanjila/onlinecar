
<!DOCTYPE html>
<html>
<head>
	<title>Delete job</title>
</head>
<body>

	<h2>Delete job</h2>

	<a href="/ustdList">Back</a> |
	<a href="/logout">logout</a>

<form method="post">
	@csrf
	<table border="0">
		<tr>
			<td>Id :</td>
			<td>{{$std['id']}}</td>
		</tr>
		
		<tr>
			<td>Company Name :</td>
			<td>{{$std['cname']}}</td>
		</tr>
		<tr>
			<td>Job title :</td>
			<td>{{$std['jtitle']}}</td>
		</tr>
		
		<tr>
			<td>Location :</td>
			<td>{{$std['location']}}</td>
		</tr>
		
		<tr>
			<td>Salary :</td>
			<td>{{$std['salary']}}</td>
		</tr>
		
</table>
	<h3>Are you sure?</h3>
	<input type="submit" name="delete" value="Confirm">
</form>
</body>
</html>