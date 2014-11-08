<?php

function tampilNama($nama){
	echo "Nama saya adalah ".$nama;
	// return " nilai tambahan ";
}

function tambah($nil1, $nil2){
	return $nil1+$nil2;
}

function pangkat($nil, $pangkat = 2){
	echo "Hasil pemangkatan ".$nil." pangkat ".$pangkat
						." adalah ".pow($nil, $pangkat);
}

class Mahasiswa
{
	private $nim;
	protected $nama;
	public $ipk;
	
	function __construct()
	{
		$this->initialize("default", "default", 0.00);
	}

	function initialize($nim, $nama, $ipk){
		$this->nim = $nim;
		$this->nama = $nama;
		$this->ipk = $ipk;
	}

	function printInfo(){
		echo $this->nim." || ".$this->nama." || ".$this->ipk;
	}
}

?>