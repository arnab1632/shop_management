<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Delete Page</h1>
	<a href="{{route('admin.index')}}">Back</a> | 
	<a href="/logout">logout</a>
	
	<table border="1">
		<tr>
			<td>Id</td>
			@foreach($users as $u)
			<td>{{$u['userId']}}</td>
		</tr>
		<tr>
			<td>Username</td>
			<td>{{$u['username']}}</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>{{$u['password']}}</td>\
			@endforeach
		</tr>
	</table>

<form method="post">
	<h3>Are you sure?</h3>
	<input type="submit" name="submit" value="Confirm">
</form>

</body>
</html>