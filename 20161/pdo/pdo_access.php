<?php 
require "connection.php"; 

function readDB(){
	global $db;
	$query = 'select * from mahasiswa';
	$res = $db->query($query);

	echo '<ul>';
	foreach ($res as $data) {
		echo '<li>'.$data['nim'].' - '.$data['nama']
				 .' - '.$data['ipk'].'</li>';
	}
	echo '</ul>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PDO Access</title>
</head>
<body>
<?php
	// readDB();

	// $query = 'insert into mahasiswa values (?, ?, ?, ?, ?)';
	// $stmt = $db->prepare($query);
	// $input = array('A11.9876', 'Yanto', 
	// 							 'yanto@gmail', 3.8, 'a');
	// $stmt->execute($input);
	// readDB();

	// $query = 'update mahasiswa set ipk = :ipk where nim = :nim';
	// $stmt = $db->prepare($query);
	// $input = array('ipk'=>3.2, 'nim'=>'A11.9876');
	// $stmt->execute($input);
	// readDB();

	// $query = 'delete from mahasiswa where nim = :nim';
	// $stmt = $db->prepare($query);
	// $input = array('nim'=>'A11.9876');
	// $stmt->execute($input);	
	// readDB();

	echo "<hr />";
	// $ipk = 3.6.'; delete from mahasiswa where nim = "A9876"';
	$ipk = 'asdfp; asfasdfadsf"asdfsadf';
	// $query = 'select * from mahasiswa where ipk > '.$ipk;
	// $res = $db->query($query);
	$query = 'select * from mahasiswa where ipk > ?';
	$stmt = $db->prepare($query);
	$stmt->execute(array($ipk));
	$res = $stmt->fetchAll(PDO::FETCH_ASSOC);

	echo '<ul>';
	foreach ($res as $data) {
		echo '<li>'.$data['nim'].' - '.$data['nama']
				 .' - '.$data['ipk'].'</li>';
	}
	echo '</ul>';
?>
<!-- </body> -->
</html>