<?php

include 'connect.php';

class Matakuliah extends DBConnect{

	function insertMatkul($namamk, $sks, $sem){
		$stmt = $this->db->prepare('insert into matakuliah values (null, ?, ?, ?)');
		$stmt->execute(array($namamk, $sks, $sem));
	}

	function getActiveMatkul($where = null){
		if(null == $where)
			$res = $this->db->query('select * from matakuliah where status = 1');
		else
			$res = $this->db->query('select * from matakuliah where status = 1 and '.$where);

		return $res;
	}

	function getAllMatkul($where = null){
		if(null == $where)
			$res = $this->db->query('select * from matakuliah');
		else
			$res = $this->db->query('select * from matakuliah where '.$where);

		return $res;
	}

	function getStatus($status){
		if($status == 1){
			return "aktif";
		} else {
			return "non aktif";
		}
	}
}
