<?php session_start(); ?> 
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<?php
			if( isset($_COOKIE['name']) ){
				print_r($_COOKIE);
//				echo $_COOKIE['name'];
			} else {
				echo "belum ada cookie tersimpan";
			}
			echo '<br />';
			if( isset($_SESSION['userdata']) ){
				print_r($_SESSION);
			} else {
				echo "belum ada session tersimpan";
			}
		?>
</body>
</html>
