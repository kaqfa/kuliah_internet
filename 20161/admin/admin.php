<?php
session_start();
// $user = $_SESSION['login'];
$user = $_COOKIE['login'];
if($user){
	require "../php/admin_input_mhs.php";
} else {
	header("location:login.php");
}