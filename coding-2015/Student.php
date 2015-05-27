<?php
include "koneksi.php";

class Student extends DBAccess{
	public $nim;
	public $nama;
	public $alamat;
	public $ipk;
    public $status;

	// constructor Sama seperti nama class
	function __construct($nim = null, $nama = null, $alamat = null, $ipk = null){
		parent::__construct();
		if(null == $nama){
			$this->getMhsFromDB($nim);
		} else {
			$this->nim = $nim;
			$this->nama = $nama;
			$this->alamat = $alamat;
			$this->ipk = $ipk;
		}
	}

    public function insertMhsByArray($inputArr){
      $this->insertMhs($inputArr['nim'], $inputArr['nama'], $inputArr['alamat'], $inputArr['ipk']);
    }

    public function insertMhs($nim, $nama, $alamat, $ipk){
      $statement = $this->db->prepare("insert into mahasiswa values (?, ?, ?, ?)");
      $statement->execute(array($nim, $nama, $alamat, $ipk));
    }

	public function getAllMhs(){
		$rs = $this->db->query("select * from mahasiswa where status = 1");
		return $rs->fetchAll(PDO::FETCH_OBJ);
	}

	public function getMhsFromDB($nim){
      $statement = $this->db->prepare("select * from mahasiswa where status = 1 and nim = ?");
      $statement->execute(array($nim));
      $statement->fetch(PDO::FETCH_OBJ);
	}

	protected function level(){
		if($this->ipk > 3.5)
			return "Cumlaude";
		else if($this->ipk > 3)
			return "Good";
		else if($this->ipk > 2.5)
			return "Enough";
		else
			return "Not Enough";
	}

	public function showProfile(){
		echo "NIM : ".$this->nim."<br />";
		echo "Nama : ".$this->nama."<br />";
		echo "Alamat : ".$this->alamat."<br />";
		echo "IPK : ".$this->ipk."<br />";
		echo "Status: ".$this->status()."<br />";
	}
}
