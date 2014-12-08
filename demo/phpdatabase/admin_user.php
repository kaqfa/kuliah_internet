<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
	<?php

	$user = new User();
	$userList = $user->listUser();

	foreach($userList as $data){
		echo '<tr> <td>'.$data['email'].'</td> </tr>';
	}

	?>
	</table>
</body>
</html>