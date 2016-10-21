<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Latihan State Pada PHP</title>
</head>
<body>
	<h1>
	<?php
		echo $_COOKIE['name'];
	?>
	</h1>
	<h1>
	<?php
		echo $_SESSION['name'];
	?>
	</h1>
</body>
</html>
