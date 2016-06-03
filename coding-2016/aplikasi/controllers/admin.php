<?php 
include_once('models/member.php');
include_once('models/course.php');
include_once('models/class.php');
include_once('models/class_member.php');

function dashboard(){
	$member = new Member();
	$level = $member->getLevel($_SESSION['user_level']);
	include "views/dashboard.php";
}