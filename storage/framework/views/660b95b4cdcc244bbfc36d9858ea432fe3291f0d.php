<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>User List</h1>
	<a href="/home">Back</a> | 
	<a href="/logout">logout</a>
	
	<table border="1">
		<tr>
			<td>Id</td>
			<td>Username</td>
			<td>Password</td>
			<td>Type</td>
			<td>Action</td>
		</tr>

	 <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($s->userId); ?></td>
			<td><?php echo e($s->username); ?></td>
			<td><?php echo e($s->password); ?></td>
			<td><?php echo e($s->type); ?></td>
			<td>
				<a href="<?php echo e(route('admin.edit', $s->userId)); ?>">Edit</a> | 
				<a href="<?php echo e(route('admin.delete', $s->userId)); ?>">Delete</a> | 
				<a href="<?php echo e(route('admin.details', $s->userId)); ?>">Details</a>
			</td>
		</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</table>

</body>
</html>