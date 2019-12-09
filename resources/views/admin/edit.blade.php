<!DOCTYPE html>
<html>
<head>
	<title>edit page</title>
</head>
<body>
	<h1>Edit User</h1>
	<a href="{{route('admin.index')}}">Back</a> | 
	<a href="/logout">logout</a>
	
	<form method="post">
	<table border="1">
		<tr>
			<td>Username</td>
			@foreach($users as $u)
			<td><input type="text" name="username" value="{{$u['username']}}"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" name="password" value="{{$u['password']}}"></td>
			@endforeach
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="update"></td>
			<td></td>
		</tr>
	</table>
</form>

</body>
</html>