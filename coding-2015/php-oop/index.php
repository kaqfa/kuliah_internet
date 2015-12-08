<?php
include "user.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Latihan PBO di PHP</title>
</head>
<body>
<?php
	include "student.php";
	$user[0] = new User('A11.01234', 'erna123');
	$user[1] = new Student('A11.02345', 'rendi123', 'rendi@gmail.com', 'Rendi Dediansyah', 2);
	$user[2] = new User('A11.03456', 'ratna123');
	$user[1]->setIpk(3.7);
	echo '<ul>';
	foreach ($user as $data) {
		echo '<li>'.$data->username.' ['.$data->getStatus().']</li>';
	}
	echo '</ul>';
	echo $user[1]->getIpkLevel();
?>
</body>
</html>
