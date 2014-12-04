<?php
include "connection.php";

$query = "insert into phonebook values (null, ?, ?, ?, ?, ?)";
$ps = $db->prepare($query);

$data[0] = array('Andi', '08762312323', 'andi@gmail.com', 
			'Jl. Kelinci kecil', '1');
$data[1] = array('Lani', '08762312323', 'lani@gmail.com', 
			'Jl. Badak raya', '0');
$data[2] = array('Rizky', '08762312323', 'rizky@gmail.com', 
			'Jl. dewi sartika', '0');

foreach ($data as $nilai) {
	$ps->execute($nilai);
}
