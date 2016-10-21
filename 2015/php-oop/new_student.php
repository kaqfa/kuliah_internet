<?php

class Student{

	var $nim;
	var $fullname;
	var $gpa;
	var $category;

	var $db;

	function __construct(){
		$this->db = new PDO(
			"mysql:dbname=test;host=localhost",
			"root","");
		$this->db->setAttribute(
			PDO::ATTR_ERRMODE,
			PDO::ERRMODE_EXCEPTION);
	}

	function getStudents(){
		# get students from db;
		$res = $this->db->query(
					'select * from student
					where status = "active"');
		return $res;
	}

	function studentLevel(){
		if($this->gpa > 3.5){
			return "Cumlaude";
		} else {
			return "Regular";
		}
	}

	function insertNewStudent(
					$nim, $fullname, $gpa,
					$category = 'regular'){
		$stmt = $this->db->prepare(
			'insert into
			student values (?, ?, ?, ?)');
		$stmt->execute(array($nim, $fullname,
					$gpa, $category));
	}
}


class SitInStudent extends Student{

	function createActivity($name, $place, $date){

		$stmt = $this->db->prepare("insert into
			student_activity values (?, ?, ?)");

		$stmt->execute(array($name, $place, $date));
	}

	# overriding
	function getStudents(){
		$res = $this->db->query('select * from student
					where status = "active"
					and category="sit in"');
		return $res;
	}
}

// automatically do database connection
$student = new Student();
$student->insertNewStudent('123', 'adf', 3.5);
$student->insertNewStudent('234', 'qwe', 3.4);
$student->insertNewStudent('456', 'zxc', 3.7, 'sit in');
$student->getStudents();

$sitStudent = new SitInStudent();
$sitStudent->getStudents();
$sitStudent->createActivity('Outbond', 'Bandengan',
			'12/01/2016');
