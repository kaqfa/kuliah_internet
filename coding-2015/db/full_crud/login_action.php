<?php

include '../userlogin.php';

if(isset($_GET['action']) && $_GET['action'] == 'logout'){
    setcookie('username');
    setcookie('status');
    header('location:login.php');
} else {
    $salt = 'asdfsday*(&14132&%&^%{}{:":sadfads}';
    $auth = $user->loginAuth($_POST['username'], md5($_POST['password'].$salt));
    if($auth != NULL){
        setcookie('username', $auth['username']);
        setcookie('status', 'logged_in');

        header('location:index.php');
    } else {
        header('location:login.php');
    }
}
