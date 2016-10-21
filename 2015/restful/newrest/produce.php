<?php
$header = "Content-Type: application/json";
header($header);

$date = array('today'=>date("M d, Y"));
// print json_encode($date);

$students = array(
        array('nim'=>'1234', 'name'=>'Andre', 'gpa'=>3.7),
        array('nim'=>'3456', 'name'=>'Indira', 'gpa'=>3.9),
        array('nim'=>'6789', 'name'=>'Eko', 'gpa'=>3.5)
    );

// print json_encode($students);

include '../../db/student.php';
$res = $student->getAllStudents(true);
$studentDB = array();
foreach($res as $data){
    array_push($studentDB, $data);
}

print json_encode($studentDB);
