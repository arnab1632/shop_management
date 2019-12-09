<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Delete Page</h1>
	<a href="<?php echo e(route('admin.index')); ?>">Back</a> | 
	<a href="/logout">logout</a>
	
	<table border="1">
		<tr>
			<td>Id</td>
			<td><?php echo e($user['userId']); ?></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><?php echo e($user['username']); ?></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><?php echo e($user['password']); ?></td>
		</tr>
	</table>

<form method="post">
	<h3>Are you sure?</h3>
	<input type="submit" name="submit" value="Confirm">
</form>

</body>
</html>