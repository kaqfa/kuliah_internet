<?php

$user = new User();
$userList = $user->listUser();

foreach($userList as $data){
	echo $data['username'];
}