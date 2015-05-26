<?php

class DBAccess{
	protected $db;

	function __construct(){
		$this->db = new PDO("mysql:host=localhost;dbname=akademik", 'root', '');
	}

}
