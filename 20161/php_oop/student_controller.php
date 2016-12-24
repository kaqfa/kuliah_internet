<?php
include "student.php"; 

class StudentController{
	private $student;

	function __construct(){
		$this->student  = new Student();
	}

	function listStudent(){
		$studentList = $this->student->getStudents();
		include "student_list_view.php";
	}

	function formStudent(){
		echo "<h1>this is student form</h1>";
	}

	function insertStudent(){
		echo "<h1>this is student insert</h1>";
	}

	function delStudent(){
		echo "<h1>this is student delete confirmation</h1>";
	}
}