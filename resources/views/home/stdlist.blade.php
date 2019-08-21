<!DOCTYPE html>
<html>
<head>
	<title>EMPLOYEE LIST</title>
</head>
<body>

	<h2>employee List:</h2>
	
	<a href="/home">Back</a> |
	<a href="/logout">logout</a>

	<table border="1">
		<tr>
			<td>Employeer name</td>
			<td>Company name</td>
			<td>Contact no</td>
			<td>username</td>
			<td>Action</td>
		</tr>
		@foreach($std as $value)
		<tr>
			<td>{{$value['ename']}}</td>
			<td>{{$value['cname']}}</td>
			<td>{{$value['number']}}</td>
			<td>{{$value['username']}}</td>
			<td>
				<a href="/edit/{{$value['id']}}">Edit</a> |
				<a href="/delete/{{$value['id']}}">Delete</a> |
				
			</td>
		</tr>
		@endforeach

</table>

</body>
</html>