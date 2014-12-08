<?php

include 'UserClass.php';

$user = new User();
$user->register($_POST);