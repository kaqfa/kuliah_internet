<?php
include_once 'koneksi.php';

class Mahasiswa extends DBAccess{

	function getAllMhs(){
		return $this->db->query('select * from mahasiswa where status = 1');
	}

	function getAllDropoutMhs(){
		return $this->db->query('select * from mahasiswa where status = 0');
	}

	function getAllAlumni(){
		return $this->db->query('select * from mahasiswa where status = 2');
	}

	function addMhs($nim, $nama, $alamat, $ipk = 0){
		$stmt = $this->db->prepare('insert into mahasiswa values (?, ?, ?, ?, 1)');
		$stmt->execute( array($nim, $nama, $alamat, $ipk) );
		return 'input mahasiswa NIM : '.$nim.' berhasil';
	}
}
