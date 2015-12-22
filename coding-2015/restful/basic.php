<?php
$header = "Content-Type: application/json";
header($header);

$date = date("M d, Y");
//print json_encode($date);

$mhs = array(
        array('nama'=>"Ardiansyah", 'alamat'=>"Semarang", 'ipk'=>3.7),
        array('nama'=>"Muna", 'alamat'=>"Kendal", 'ipk'=>3.3),
        array('nama'=>"Rofiq", 'alamat'=>"Kebumen", 'ipk'=>3.6),
        array('nama'=>"Andre", 'alamat'=>"Jepara", 'ipk'=>3.1)
    );
//print json_encode($mhs);

include "../db/mahasiswa.php";
$data = $mhs->getMhsAllStatus();
$mhs = array();
foreach($data as $mhsData){
    array_push($mhs, $mhsData);
}

print json_encode($mhs);
