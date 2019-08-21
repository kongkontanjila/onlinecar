
<!DOCTYPE html>
<html>
<head>
	<title>Delete CAR INFO</title>
</head>
<body>

	<h2>Cancel order</h2>

	<a href="/stdList">Back</a> |
	<a href="/logout">logout</a>

<form method="post">
	@csrf
	
	<h3>Are you sure?</h3>
	<input type="submit" name="delete" value="Confirm">
</form>
</body>
</html>