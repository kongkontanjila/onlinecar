<!DOCTYPE html>
<html>
<head>
	<title>MEMBER LIST</title>
</head>
<body>

	<h2>member List:</h2>
	
	<a href="/home">Back</a> |
	<a href="/logout">logout</a>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>USERNAME</td>
			<td>E-MAiL</td>
			<td>NUmBeR</td>
			<td>TYPE</td>
			
		</tr>
		@foreach($member as $value)
		<tr>
			<td>{{$value['id']}}</td>
			<td>{{$value['username']}}</td>
			<td>{{$value['mail']}}</td>
			<td>{{$value['number']}}</td>
			<td>{{$value['type']}}</td>
			<td>
				
				<a href="/deletemember/{{$value['id']}}">Delete</a> |
				
			</td>
		</tr>
		@endforeach

</table>

</body>
</html>