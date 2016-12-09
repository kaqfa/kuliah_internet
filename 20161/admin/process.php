<?php
session_start();
require "../pdo/connection.php";

function loginCheck(){
	global $db;
	$prep = $db->prepare("select * from users where username=?");	
	$prep->execute(array($_POST['username']));
	$res = $prep->fetch();

	if($res['password'] == md5($_POST['password']))
		return $res;
	else
		return false;
}

$login = loginCheck();

if($_REQUEST['action']=='logout'){
	session_destroy();
	unset($_COOKIE['login']); // acceptable
	setcookie('login', null, -1);	// better
	header("location:login.php");
} else if($login){
	// User found and will be redirected to admin page
	$_SESSION['admin'] = $login;
	setcookie('login', $login['username']);
	header("location:admin.php");
} else {
	// User not found and will be redirected to login page again
	header("location:login.php");	
}