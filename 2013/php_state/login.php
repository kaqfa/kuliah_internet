<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl" xml:lang="pl">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="Paweł 'kilab' Balicki - kilab.pl" />
<title>SimpleAdmin</title>
<link rel="stylesheet" type="text/css" href="../template/css/login.css" media="screen" />
</head>
<body>
<div class="wrap">
	<div id="content">
		<div id="main">
			<div class="full_w">
				<?php if( isset($_GET['login']) ){
						echo '<div class="n_error"><p>Login failed, username or password is not match.</p></div>';
					} ?>				
				<form action="process_login.php" method="post">
					<label for="login">Username:</label>
					<input id="login" name="username" class="text" />
					<label for="pass">Password:</label>
					<input id="pass" name="pass" type="password" class="text" />
					<input type="checkbox" name="remember" value="1" /> <span>remember me</span>
					<div class="sep"></div>
					<button type="submit" name="login" class="ok">Login</button> <a class="button" href="">Forgotten password?</a>
				</form>
			</div>
			<div class="footer">&raquo; <a href="">http://yourpage.com</a> | Admin Panel</div>
		</div>
	</div>
</div>

</body>
</html>
