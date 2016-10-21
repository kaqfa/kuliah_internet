<?php
include_once 'user.php';

class Student extends User{
	public $ipk;

	function setIpk($ipk){
		$this->ipk = $ipk;
	}

	function getIpkLevel(){
		if($this->ipk > 3.5){
			return 'Sempurna';
		} else if($this->ipk > 3.0){
			return 'Baik';
		} else if($this->ipk > 2.0){
			return "Cukup";
		} else {
			return 'Belum boleh lulus';
		}
	}
}
