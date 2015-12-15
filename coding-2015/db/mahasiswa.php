<?php
include_once 'koneksi.php';

class Mahasiswa extends DBAccess{

    function getMhs($nim){
        $stmt = $this->db->prepare('select * from mahasiswa where nim = ?');
        $stmt->execute(array($nim));
        return $stmt->fetch();
    }

    function getMhsAllStatus(){
        return $this->db->query('select * from mahasiswa');
    }

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

    function updateMhs($nim, $data = array()){
        $stmt = $this->db->prepare('update mahasiswa set
                                nama = ?, alamat = ?, ipk = ? where nim = ?');
		$stmt->execute( array($data['nama'], $data['alamat'], $data['ipk'], $data['nim']) );
		return 'ubah mahasiswa NIM : '.$nim.' berhasil';
    }

    function delMhs($nim){
        $stmt = $this->db->prepare('delete from mahasiswa where nim = ?');
        $stmt->execute(array($nim));
    }

    function showStatus($status){
        if($status == 1){
            return "Aktif";
        } elseif ($status == 2){
            return "Alumni";
        }
        return "Non Aktif";
    }
}

$mhs = new Mahasiswa();
