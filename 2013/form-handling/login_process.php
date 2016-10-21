<!DOCTYPE HTML>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	$user = array('uname'=>'admin', 'password'=>'admin123');

	if($_POST['username'] == $user['uname'] && $_POST['passwd'] == $user['password']){
		$username = $_POST['username'];
		$password = md5($_POST['passwd']);
	} else {
		$username = 'INVALID';
		$password = 'INVALID';
	}
?>
	<table border="1" >
		<tr>
			<td>Username</td>
			<td><?php echo $username; ?></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><?php echo $password; ?></td>
		</tr>
	</table>

</body>
</html>