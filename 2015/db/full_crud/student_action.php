<?php
include '../student.php';


if($_POST['action'] == 'input'){
    $student->insertStudent($_POST['nim'], $_POST['fullname'],
                        $_POST['address'], $_POST['gpa'], $_POST['status']);
} elseif($_POST['action'] == 'edit') {
    $student->updateStudent($_POST['nim'], $_POST['fullname'],
                        $_POST['address'], $_POST['gpa'], $_POST['status']);
} elseif($_GET['action'] == 'delete'){
    $student->deleteStudent($_GET['nim']);
}

header('location:index.php?page=student_list');
