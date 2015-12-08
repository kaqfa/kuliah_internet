<?php

// versi driver mysql koneksi dengan menggunakan fungsi
mysql_connect('localhost', 'root', '');
mysql_select_db('classicmodels');

// versi menggunakan PDO (PHP Data Object)
// koneksi dengan class PDO dengan parameter Connection String dan
// disimpan dalam sebuah variabel
$db = null;
try{
	$db = new PDO("mysql:host=localhost;dbname=classicmodels", "root", "");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
	echo $e->getMessage();
}

// return type dari mysql_fetch berupa pointer (queue)
$query = mysql_query('select * from offices');
while($fetchArray = mysql_fetch_array($query)){
	$fetchArray['location'];
}

// return type dari query / fetch data berupa array 2 dimensi
$res = $db->query("SELECT * FROM offices");
foreach($res as $row){
	echo $row['country'].'<br />';
}


// Menginputkan data secara langsung dengan konkatenasi nilai
$query = mysql_query(
			'INSERT INTO offices VALUES(8,\'Semarang\',\'+62 9098097\',
			   "Jl. Raya Imam Bonjol", \'Jl. Raya Pemuda\',
			   \'SMG\', \'INA\', \'89765\', \'Indonesia\')');


// Menginputkan data dengan binding variable
$ssql = $db->prepare("INSERT INTO offices VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)");
$ssql->execute( array(8,'Semarang','+62 9098097',
   "Jl. Raya Imam Bonjol", 'Jl. Raya Pemuda',
   'SMG', 'INA', '89765', 'Indonesia'));

// username = 123456' or true; --  [SQL Injection]
$username = mysql_escape_string(stripslashes($_POST[username]));
select * from userlogin where username = '123456' or true; --' and passwd = '123'
