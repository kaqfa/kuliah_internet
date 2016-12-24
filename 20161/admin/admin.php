<?php
session_start();
include "config.php";
$user = $_SESSION['login'];
// $user = $_COOKIE['login'];
if($user){ // cek apakah user sudah login
	if(!isset($_GET['page'])){
		include 'admin_template.php';
	} else if($_GET['page'] == 'input_mhs') {
		require "../php/admin_input_mhs.php";
	}  else {
		include 'admin_template.php';
	}
} else {
	$_SESSION['message'] = 'Untuk mengakses halaman admin, harus login dulu';
	header("location:login.php");
}