<?php
include "mahasiswa.php";

// $ssql = $db->prepare("INSERT INTO mahasiswa VALUES (?, ?, ?, ?)");
// $ssql->execute( array('A11.2015.01234', 'Andi', 'Semarang', 3.7) );
// $ssql->execute( array('A11.2015.02345', 'Anton', 'Jepara', 3.4) );
// $ssql->execute( array('A11.2015.03456', 'Nisa', 'Jakarta', 3.9) );
// $ssql->execute( array('A11.2015.04567', 'Linda', 'Surabaya', 3.3) );

// echo "eksekusi input berhasil";

// query statis
$mhs = new Mahasiswa();
$data = $mhs->getAllMhs();
echo '<ol>';
foreach($data as $row){
	echo '<li>'.$row['nim'].' - '.$row['nama'].'</li>';
}
echo '</ol>';

$mhs->addMhs('A11.2015.07890', 'Rendi', 'Papua', 3.1);
$mhs->addMhs('A11.2015.07892', 'Rere', 'Sumatra');
