<?php
try {
  $db = new PDO("mysql:host=localhost;dbname=classicmodels",
  				"root", "");

  //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "SELECT * FROM offices";
  $res = $db->query($sql);
  foreach($res as $row){
  	//print_r($row);
  	echo $row['country'].'<br />';
  }

  // $sql = "INSERT INTO offices VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";
  // $ssql = $db->prepare($sql);
  
  // $ssql->execute( array(8,'Semarang','+62 9098097',
	 //   "Jl. Raya Imam Bonjol", 'Jl. Raya Pemuda', 
	 //   'SMG', 'INA', '89765', 'Indonesia'));
  
  // $ssql->execute( array(9,'Jepara','+62 987986',
  //    "Jl. Raya Tahunan Jepara", 'Jl. Raya Pemuda', 
  //    'Jepara', 'INA', '12313', 'Indonesia'));

  // $ssql->execute( array(10,'Kudus','+62 877652',
  //    "Jl. KHR. Asnawi", 'Jl. KH. Arwani', 
  //    'Kudus', 'INA', '54634', 'Indonesia'));


  // $sql = "UPDATE offices SET addressLine2 = :addr2 ";
  // $ssql = $db->prepare($sql);
  // $ssql->execute(
  // array(':addr2' => 'Jl. Nakula I No. 5 - 11'));

  $sql = "DELETE FROM offices WHERE officeCode = :code";
  $ssql = $db->prepare($sql);
  $ssql->bindParam(':code', $code);
  
  $code = 8;
  $ssql->execute();

  $code = 9;
  $ssql->execute();

  $code = 10;
  $ssql->execute();

} catch(PDOException $e) {
	echo $e->getMessage();
}
