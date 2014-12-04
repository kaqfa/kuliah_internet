<?php
include "connection.php";

$query = "select * from phonebook where status = ?";

try{
	$ps = $db->prepare($query);
	$ps->execute(array($_GET['status']));

	$result = $ps->fetchAll(PDO::FETCH_OBJ);

} catch(PDOException $e){
	$fileHand = fopen('errormsg', 'a+');
	fwrite($fileHand, $e->getMessage());
	echo "ups maaf ada yang salah";
}

// foreach($result as $res){
//	print_r($res);
//	echo "<h3>".$res['address']."</h3>";
// }

print_r($result);
echo $result[1]->name;