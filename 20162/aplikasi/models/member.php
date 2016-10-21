<?php

class Member extends Model{
	private $level = array('a' => 'admin', 'i' => 'instructor', 's' => 'student');

	function getMemberById($id){
		$stmt = $this->db->prepare('select * from member where id = ?');
		$stmt->execute(array($id));
		$res = $stmt->fetch();
		return $res;
	}

	function getAllMembers(){
		$res = $this->db->query('select * from member');		
		return $res;		
	}

	function register($data){
		$stmt = $this->db->prepare('insert into member values (null, ?, ?, ?, ?, ?)');
		$stmt->execute(array($data['username'], $data['fullname'], 
								 $data['email'], md5($data['password']), 
								 $data['level']));
	}

	function auth($username, $password){
		$stmt = $this->db->prepare('select * from member where username = ?');
		$stmt->execute(array($username));
		$res = $stmt->fetch();
		if($res['password'] == md5($password)){
			return $res;
		} else {
			return false;
		}
	}

	function getLevel($level){
		return $this->level[$level];
	}
}

$member = new Member();