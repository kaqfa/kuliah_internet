<?php
include "../db/mahasiswa.php";

// query statis
$mhs = new Mahasiswa();
$data = $mhs->getAllMhs();
echo '<table border="1" width="500">';
foreach($data as $row){
	echo '<tr><td>'.$row['nim'].' </td><td> '.$row['nama'].'</td></tr>';
}
echo '</table>';
