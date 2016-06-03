<?php

class Model{

	protected $db;

	function __construct(){

		try {
		  $this->db = new PDO("mysql:dbname=lms;host=localhost","root","");
		  $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e){
		  echo $e->getMessage();
		}

	}
}