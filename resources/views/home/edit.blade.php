
<!DOCTYPE html>
<html>
<head>
	<title>Edit My Profile</title>
</head>
<body>

	<h2>Edit My profile</h2>

	<a href="/stdList">Employee List</a> |
	<a href="/logout">logout</a>

<form method="post">
	@csrf
	<table border="0">
		<tr>
			<td>Id</td>
			<td>{{$user['id']}}</td>
		</tr>
		<tr>
			<td> USERNAME</td>
			<td><input type="text" name="uname" value="{{$user['username']}}"></td>
		</tr>
		<tr>
			<td>E-mail Address</td>
			<td><input type="mail" name="mail" value="{{$user['mail']}}"></td>
		</tr>
		
		<tr>
			<td>Contact Number</td>
			<td><input type="text" name="number" value="{{$user['number']}}"></td>
		</tr>
		<tr>
			<td>password</td>
			<td><input type="text" name="password" value="{{$user['password']}}"></td>
		</tr>
		<tr>
			<td>User Type</td>
			<td><input type="text" name="type" value="{{$user['type']}}" readonly></td>
		</tr>
		
		
		
		<tr>
			<td></td>
			<td><input type="submit" name="save" value="Save"></td>
		</tr>
</table>
</form>
</body>
</html>