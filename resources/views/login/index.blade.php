<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<h1> LOGIN PAGE</h1>
	<a href="/add">Register Now </a> |
	

	<form method="post">

		<!--{{csrf_field()}} -->
		<!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --> 
		@csrf
		
		<table>
			<tr>
				<td>UserName</td>
				<td><input type="text" name="uname" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" required></td>
			</tr>
			<tr>
			<p>please select your user type</p>
				
				<td><input type="radio" name="type" value="admin">Admin</td>
				<td><input type="radio" name="type" value="user">User</td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Submit"></td>
				<td></td>
			</tr>
		</table>
	</form>

	<div>
		{{session('msg')}}
	</div>
</body>
</html>