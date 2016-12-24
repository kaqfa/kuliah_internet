<?php 
include "student_controller.php";
$stCtrl = new StudentController();

// router
if(isset($_GET['page'])){
	if($_GET['page'] == 'form_student')
		$stCtrl->formStudent();
	else if($_GET['page'] == 'insert_student' && $_POST['btn_save'])
		$stCtrl->insertStudent();
	else
		echo "<h1>404 Page Not Found</h1>";
} else {
	$stCtrl->listStudent();
}
