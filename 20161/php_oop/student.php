<?php 
include "connection.php";

class Student extends DBConnection
{
		function addStudent($nim, $nama, $email, $ipk, $status = 'a'){
			$sql = 'insert into mahasiswa values (?, ?, ?, ?, ?)';
			$prep = $this->db->prepare($sql);
			$res = $prep->execute(array($nim, $nama, $email, $ipk, $status));
			return $res;
		}

		function delStudent($nim){
			$sql = 'delete from mahasiswa where nim = ?';
			$prep = $this->db->prepare($sql);
			$res = $prep->execute(array($nim));
			return $res;
		}

		function getStudents(){
			$sql = 'select * from mahasiswa where status = "a"';
			$res = $this->db->query($sql);
			return $res;
		}

		function getStatus($status_code){
			if($status_code == 'a')
				return 'active';
			else
				return 'graduated';
		}
}