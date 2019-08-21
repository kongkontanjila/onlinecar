<!DOCTYPE html>
<html>
<head>
	<title>ReGISTRATION FORM</title>
</head>
<body>

	<h2>ReGISTRATION FORM</h2>

	<a href="{{route('login.index')}}">Back</a> |
	

<form method="post">
	@csrf
	<table border="0">
		<tr>
				<td>UserName</td>
				<td><input type="text" name="uname" required></td>
			</tr>
		
		<tr>
			<td>E-mail</td>
			<td><input type="mail" name="mail"></td>
		</tr>
		<tr>
			<td>Contact Number</td>
			<td><input type="text" name="number"></td>
		</tr>
		<tr>
			<td>password</td>
			<td><input type="text" name="password" required></td>
		</tr>
		
		<tr>
		<td>User Type</td>
			
		</tr>
		<tr>
			<td><input type="radio" name="type" value="admin">Admin</td>
				<td><input type="radio" name="type" value="user">User</td>
		</tr>
		
		<tr>
			<td></td>
			<td><input type="submit" name="save" value="Save"></td>
		</tr>
</table>
</form>
</body>
</html>