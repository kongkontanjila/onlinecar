
<!DOCTYPE html>
<html>
<head>
	<title>Edit Student</title>
</head>
<body>

	<h2>Edit job</h2>

	<a href="/ustdList">Back</a> |
	<a href="/logout">logout</a>

<form method="post">
	@csrf
	<table border="0">
		<tr>
			<td>Id</td>
			<td>{{$std['id']}}</td>
		</tr>
		
		<tr>
			<td> Company Name</td>
			<td><input type="text" name="cname" value="{{$std['cname']}}"></td>
		</tr>
		<tr>
			<td>Job title</td>
			<td><input type="text" name="jtitle" value="{{$std['jtitle']}}"></td>
		</tr>
		<tr>
			<td>Location</td>
			<td><input type="text" name="location" value="{{$std['location']}}"></td>
		</tr>
		<tr>
			<td>Salary</td>
			<td><input type="text" name="salary" value="{{$std['salary']}}"></td>
		</tr>
		
		
		<tr>
			<td></td>
			<td><input type="submit" name="save" value="Save"></td>
		</tr>
</table>
</form>
</body>
</html>