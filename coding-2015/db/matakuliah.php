<?php

include 'connect.php';

class Matakuliah extends DBConnect{

	function getMatkul($id){
        $stmt = $this->db->prepare('select * from matakuliah where id = ?');
        $stmt->execute(array($id));
        return $stmt->fetch();
    }

    function insertMatkul($namamk, $sks, $sem){
		$stmt = $this->db->prepare('insert into matakuliah values (null, ?, ?, ?, 1)');
		$stmt->execute(array($namamk, $sks, $sem));
	}

    function delMatkul($id){
        $stmt = $this->db->prepare('delete from matakuliah where id = ?');
		$stmt->execute(array($id));
    }

    function updateMatkul($id, $namamk, $sks, $sem){
        $stmt = $this->db->prepare('update matakuliah set nama_matkul=?, sks=?, semester=?
                            where id=?');
		$stmt->execute(array($namamk, $sks, $sem, $id));
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

$matkul = new Matakuliah();
