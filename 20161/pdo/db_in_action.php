<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
include 'connection.php';

function selectStudents(){
	global $db;
	$query = 'select * from mahasiswa';
	$res = $db->query($query);

	echo '<ul>';
	foreach($res as $data){
		echo '<li>'.$data['nama'].'</li>';
	}
	echo '</ul>';
}

selectStudents();

// $query = 'insert into mahasiswa 
// 					values (?, ?, ?, ?, ?)';
// $prep = $db->prepare($query);
// $mhs = array('A11.12345', 'Janto', 
// 						 'janto@gmail.com', 3.7, 'a');
// $prep->execute($mhs);

$query = 'update mahasiswa set
					nama=:nama, ipk=:ipk where nim=:nim';
$prep = $db->prepare($query);
$mhs = array(':nim'=>'A11.12345',
						 ':ipk'=>4.0, 
						 ':nama'=>'Hindun');
$prep->execute($mhs);

selectStudents();
echo '<hr>';

// $searchkey = '" asdfasdfdf = asfasdf';
$query = 'select * from mahasiswa where
					nim = ?';
$prep = $db->prepare($query);
$prep->execute(array('" asdfasdfdf = asfasdf'));
$res = $prep->fetchAll(PDO::FETCH_ASSOC);

echo '<ul>';
foreach($res as $data){
	echo '<li>'.$data['nama'].'</li>';
}
echo '</ul>';

?>
</body>
</html>
