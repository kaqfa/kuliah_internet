<html>
<head>
	<title>User Registration</title>
</head>
<body>
	<form action="register_process.php" method="post">
	<table>
		<tr>
			<td>Full Name</td>
			<td><?php echo $_POST['fullname']; ?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><?php echo $_POST['email']; ?></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td><?php echo $_POST['gender']; ?></td>
		</tr>
		<tr>
			<td>Birth Day</td>
			<td><?php echo $_POST['birthday']; ?></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><?php echo $_POST['address']; ?></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><?php echo $_POST['passwd']; ?></td>
		</tr>
		<tr>
			<td>Password Confirmation</td>
			<td><?php echo $_POST['confirm']; ?></td>
		</tr>
	</table>
	</form>
</body>
</html>