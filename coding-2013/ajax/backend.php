<?php 
include "db.php";

$cond;

if(!isset($_GET['cond'])){
	$cond = 1;
} else {
	$cond = $_GET['cond'];
}

$sql = 'select * from customers where '.$cond;

$ssql = $db->prepare($sql);
$ssql->execute();
$result = $ssql->fetchAll(PDO::FETCH_ASSOC);
//print_r($result);
$xml = new SimpleXMLElement('<customers/>');
foreach($result as $key => $val){
	$cust = $xml->addChild('customers');
	foreach ($val as $key2 => $val2) {
		$col = $cust->addChild($key2);
		$col->value = preg_replace ('/[^\x{0009}\x{000a}\x{000d}\x{0020}-\x{D7FF}\x{E000}-\x{FFFD}]+/u', ' ', $val2);
	}
}
print $xml->asXML();