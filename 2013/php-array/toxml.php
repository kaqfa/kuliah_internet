<?php
include "arrays.php";

$xml = new SimpleXMLElement('<list_mahasiswa/>');
$flip = array_flip($listMhs);
array_walk_recursive($flip, array ($xml, 'addChild'));
print $xml->asXML();