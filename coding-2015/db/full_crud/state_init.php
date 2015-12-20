<?php
session_start();

// here we initialize the sessions and cookies
setcookie('name', "Linda Monika", time()+3600);
setcookie('group', "Student", time()+3600);
setcookie('status', "logged_in", time()+3600);

$_SESSION['name'] = "Andre Hartono";
$_SESSION['group'] = "Lecturer";
$_SESSION['status'] = "logged_in";
