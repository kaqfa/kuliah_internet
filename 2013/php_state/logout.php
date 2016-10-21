<?php session_start();
setcookie('username');
setcookie('level');

session_destroy();
header('Location: login.php');