<?php
include 'connect.php';

class Student extends DBConnect{
    // this class can do PDO manipulation through $this->db

    function insertStudent($nim, $fullname, $address, $gpa, $status){
        $stmt = $this->db->prepare('insert into student values(?, ?, ?, ?, ?)');
        $stmt->execute(array($nim, $fullname, $address, $gpa, $status));
        echo "Inserting student is successfull";
    }

    function updateStudent($nim, $fullname, $address, $gpa, $status){
        $stmt = $this->db->prepare('update student set fullname=?, address=?, gpa=?, status=?
                            where nim=?');
        $stmt->execute(array($fullname, $address, $gpa, $status, $nim));
        echo "Upadating student is successfull";
    }

    function deleteStudent($nim){
        $stmt = $this->db->prepare('delete from student where nim=?');
        $stmt->execute(array($nim));
        echo "Deleting student is successfull";
    }

    function getAllStudents($allStatus = false){
        if($allStatus == true){
            $res = $this->db->query('select * from student');
        } else {
            $res = $this->db->query('select * from student where status = 1');
        }
        return $res;
    }

    function getStudent($nim){
        $stmt = $this->db->prepare('select * from student where nim = ?');
        $stmt->execute(array($nim));
        $res = $stmt->fetch();
        return $res;
    }

    function showStatus($status){
        if($status == 1){
            return 'Active';
        } elseif ($status == 2){
            return 'Graduated';
        } elseif ($status == 0){
            return 'Non Active';
        }
    }
}

$student = new Student();
