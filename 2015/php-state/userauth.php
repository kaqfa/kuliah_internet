<?php session_start();
if($_POST['username'] == 'admin' && $_POST['password'] == 'a'){
	setcookie('userlogin', 1);
	setcookie('userlevel', 'admin');
	if($_POST['remember'] == 1){
		setcookie('userlogin', 1, time()+(3600*24));
		setcookie('userlevel', 'admin', , time()+(3600*24));
	}
	header('location:index.php');
} else {
	echo '<h1>Username &amp; Password Salah</h1>';
}
