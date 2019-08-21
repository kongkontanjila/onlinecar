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
			
			<td>Company name</td>
			<td>Job title</td>
			<td>Job location</td>
			<td>salary</td>
		</tr>
		@foreach($std as $value)
		<tr>
			
			<td>{{$value['cname']}}</td>
			<td>{{$value['jtitle']}}</td>
			<td>{{$value['location']}}</td>
			<td>{{$value['salary']}}</td>
			
			<td>
				<a href="/uedit/{{$value['id']}}">Edit</a> |
				<a href="/udelete/{{$value['id']}}">Delete</a> |
				
			</td>
		</tr>
		@endforeach

</table>

</body>
</html>