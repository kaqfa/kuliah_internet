<?php
$header = 'Content-Type: application/json';
header($header);
$date = array('current_date'=>date('M d, Y'));
//print json_encode($date);

$mhs = array(
        array('nim'=>'A123345', 'nama'=>'Rahayu', 'ipk'=>3.7),
        array('nim'=>'A134557', 'nama'=>'Kartika', 'ipk'=>3.5),
        array('nim'=>'A557456', 'nama'=>'Indra', 'ipk'=>3.1),
        array('nim'=>'A789786', 'nama'=>'Andre', 'ipk'=>3.5)
    );
//print json_encode($mhs);

include '../db/matakuliah.php';

$matkul = $matkul->getAllMatkul();
$data = array();
foreach($matkul as $mk){
    array_push($data, $mk);
}
print json_encode($data);
