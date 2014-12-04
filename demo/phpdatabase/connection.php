<?php

$db = null;

try{
	$db = new PDO("mysql:host=localhost;dbname=latihan_pdo", "root", "root");
	// menampilkan error level query
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
	echo $e.getMessage();
}