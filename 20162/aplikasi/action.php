<?php
session_start();
include "koneksi.php";
include "models/member.php";


function register(){
	$member = new Member();
	$member->register($_POST);
	echo "execute register";
	login($_POST['username'], $_POST['password']);	
}

function login($username, $password){
	echo 'execute login';
	$member = new Member();
	$mem = $member->auth($username, $password);
	print_r($mem);
	if($mem != false){
		$_SESSION['user_id'] = $mem['id'];
		$_SESSION['user_level'] = $mem['level'];
		header('location:index.php');
		// echo 'berhasil login ';
	} else {
		header('location:login.php');
	}
}

function logout(){
	session_destroy();
	header('location:login.php');
}

if(isset($_POST['register'])){
	echo "register";
	register();	
} else if(isset($_POST['login'])){
	login($_POST['username'], $_POST['password']);
} else if(isset($_GET['logout'])){
	logout();
}