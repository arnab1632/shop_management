<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>User Details</h1>
	<a href="{{route('admin.index')}}">Back</a> | 
	<a href="/logout">logout</a>
	
	<table border="1">
		<tr>
			<td>Id</td>
			<td>{{$user['userId']}}</td>
		</tr>
		<tr>
			<td>Username</td>
			<td>{{$user['username']}}</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>{{$user['password']}}</td>
		</tr>

	</table>
</body>
</html>