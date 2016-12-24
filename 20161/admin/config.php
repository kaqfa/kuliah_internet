<?php

$db_name = 'test';
$db_host = 'localhost';
$db_username = 'root';
$db_passwd = '';

try {
  $db = new PDO("mysql:dbname=".$db_name.";host=".$db_host, 
  							$db_username, $db_passwd);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
  echo $e->getMessage();
}
