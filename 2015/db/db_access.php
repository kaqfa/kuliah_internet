<?php

$db = new PDO('mysql:host=localhost;dbname=newdb;', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo '<h1>Here is the data</h1>';
$result = $db->query('select * from newtable');
echo "<ul>";
foreach ($result as $data) {
	echo "<li>".$data['id'].' - '.$data['name'].' - '.$data['price']."</li>";
}
echo "</ul>";

// $stmt = $db->prepare('insert into newtable values (null, ?, ?, ?)');
// $stmt->execute(array('Alienware', 'Gaming Laptop', 20000000));
// $stmt->execute(array('Brother DeskJet', 'Printer', 900000));
// $stmt->execute(array('Lenovo', 'Handphone', 5000000));
// $stmt->execute(array("Dark'O", 'Handphone', 5000000));

$stmt = $db->prepare("select * from newtable where name = ?");
$stmt->execute(array("Dark'O"));
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<ul>";
foreach ($result as $data) {
	echo "<li>".$data['id'].' - '.$data['name'].' - '.$data['price']."</li>";
}
echo "</ul>";
