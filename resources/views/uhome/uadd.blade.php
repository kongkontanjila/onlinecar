<!DOCTYPE html>
<html>
<head>
	<title>Add job</title>
</head>
<body>

	<h2>add job</h2>

	<a href="{{route('uhome.index')}}">Back</a> |
	<a href="/logout">logout</a>

<form method="post">
	@csrf
	<table border="0">
		<tr>
			<td>Company name</td>
			<td><input type="text" name="cname"></td>
		</tr>
		<tr>
			<td> Job title</td>
			<td><input type="text" name="jtitle"></td>
		</tr>
		<tr>
			<td>location</td>
			<td><input type="text" name="location"></td>
		</tr>
		<tr>
			<td>salary</td>
			<td><input type="text" name="salary"></td>
		</tr>
		
		
		<tr>
			<td></td>
			<td><input type="submit" name="save" value="Save"></td>
		</tr>
</table>
</form>
</body>
</html>