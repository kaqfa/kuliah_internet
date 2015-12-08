<?php
class User{
	public $username;
	public $password;
	public $email;
	public $fullname;
	public $status;

	function __construct($uname, $passwd, $email = '', $name = '', $sts = 1){
		$this->addUser($uname, $passwd, $email, $name, $sts);
	}

	function addUser($uname, $passwd, $email = '', $name = '', $sts = 1){
		$this->username = $uname;
		$this->password = $passwd;
		$this->email = $email;
		$this->fullname = $name;
		$this->status = $sts;
	}

	function getStatus(){
		if($this->status == 1){
			return 'Aktif';
		} else if($this->status == 2) {
			return 'Pending';
		} else {
			return 'Non Aktif';
		}
	}
}
