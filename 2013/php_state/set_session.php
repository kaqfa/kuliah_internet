<?php session_start();

$_SESSION['userdata'] = 
		array('name'=>'Fahri Firdausillah', 'age' => 19, 'gender'=>'male');

echo 'Sessions are set';