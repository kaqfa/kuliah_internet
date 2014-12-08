<?php
class User {	

	private $db;
	private $q; // query

	public function __construct(){  // constructor
		$this->db = new PDO('mysql:host=localhost;dbname=latihan_pdo', 
							'root', 'root');
		//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}

	public function register($post){
		try{
			$this->q = 'insert into user (id, email, passwd, fullname, status, level) 
						values (null, :email, :passwd, :full, 1, :lvl)';
			$data = array(':email'=>$post['email'], 
							':passwd'=>md5($post['passwd']), 
							':full'=>$post['fullname'], 						
							':lvl'=>$post['level']);
			
			$ps = $this->db->prepare($this->q);
			$ps->execute($data);
		} catch(PDOException $e) {
			echo $e.getMessage();
			return false;
		}

		return true;
	}


	public function authUser($email, $passwd){
		$this->q = 'select * from user where email = ? and status = 1';
		$data = array($email);
		$ps = $this->db->prepare($this->q);

		$ps->execute($data);
		$res = $ps->fetchAll();

		if($res[0]['passwd'] == md5($passwd)){
			return $res[0];
		}
		return false;
	}

	public function logout(){

	}

	public function listUser($col = '*', $cond = '1 = 1', 
							$onlyActive = true){
		$this->q = 'select '.$col.' from user where '.$cond;
		if($onlyActive == true){
			$this->q .= ' and status = 1';
		}
		$ps = $this->db->prepare($this->q);
		$data = array();
		$ps->execute($data);

		echo $this->q;

		return $ps->fetchAll(); // default PDO::FETCH_BOTH
	}

	public function editUser(){

	}

}

// $dataInput = array('email'=>'emailku@dinus.ac.id', 
// 				'passwd'=>'rahasiabersama', 
// 				'fullname'=>'Nama Saya', 'level'=>'1');
$user = new User();
// $user->register($dataInput);
$login = $user->authUser('emailku@dinus.ac.id', 'rahasiabersama');
print_r($login);