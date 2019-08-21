<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<h1>Welcome Home! {{session('user')}}</h1> 

	
	
	
	<a href="/edit/{{$user['id']}}">Edit My Profile</a> |
	<a href="/addcar">post for new car availability</a> |
	<a href="/showcar">show available car</a> |
	<a href="/showmember">MEMBER LIST</a> |
	<a href="/showwish">ORDER LIST</a> |
	<a href="/showhistory">Rental history</a> |
	
	 <li>Categories of car
                    <ul>
                        <li><a href="/showprivate">Private car</a></li>
                        <li><a href="/showpickup">PICKUP</a></li>
                        <li><a href="/showmicro">Micro</a></li>
                        
                    </ul>
                </li>
	
	
	
	<a href="/logout">logout</a>
	
		<table >
		<tr>
			<td> Username Name</td>
			<td></td>
			<td>{{$user['username']}}</td>
			
		</tr>
		
		<tr>
		
			
			<td>E-mail address</td>
			<td></td>
			<td>{{$user['mail']}}</td>
		</tr>
		<tr>
		<td>Number</td>
		<td></td>
		<td>{{$user['number']}}</td>
		</tr>
		<tr>
		<td>Password</td>
		<td></td>
		<td>{{$user['password']}}</td>
		</tr>
	
	

</table>


</body>
</html>