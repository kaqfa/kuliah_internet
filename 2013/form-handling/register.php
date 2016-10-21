<html>
<head>
	<title>User Registration</title>
</head>
<body>
	<form action="register_process.php" method="post">
	<table>
		<tr>
			<td>Full Name</td>
			<td><input type="text" name="fullname" /></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="email" name="email" /></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>
				<select name="gender">
					<option value="">Select one..</option>
					<option value="male">Male</option>
					<option value="female">Female</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Birth Day</td>
			<td><input type="date" name="birthday" /></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><textarea name="address"></textarea></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="passwd" /></td>
		</tr>
		<tr>
			<td>Password Confirmation</td>
			<td><input type="password" name="confirm" /></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="submit" value="Register"></td>
		</tr>
	</table>
	</form>
</body>
</html>