<?php
include "koneksi.php";

class Student extends DBAccess{
	private $nim;
	public $nama;
	protected $alamat;
	var $ipk;

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

	public function getAllMhs(){
		$rs = $this->db->query("select * from mahasiswa where status = 1");
		return $rs->fetchAll(PDO::FETCH_OBJ);
	}

	public function getMhsFromDB($nim){

	}

	protected function status(){
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
