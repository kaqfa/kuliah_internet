<?php

class DBAccess{
	protected $db;

	function __construct(){
        try{
            $this->db = new PDO("mysql:host=localhost;dbname=akademik", 'root', '');
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e){
            echo $e->getMessage();
        }
	}

}
