<?php
include "koneksi.php";

$rs = $db->query("select * from mahasiswa");
$result = $rs->fetchAll(PDO::FETCH_ASSOC);
foreach( $result as $data ){
	echo "NIM: <b>".$data['nim']."</b><br />";
	echo "Nama: <b>".$data['nama']."</b><br />";
	echo "Alamat: <b>".$data['alamat']."</b><br />";
	echo "IPK: <b>".$data['ipk']."</b><br />";
	echo "<hr />";
}

$rs = $db->query("select * from mahasiswa");
$result = $rs->fetchAll(PDO::FETCH_OBJ);

foreach( $result as $data ){
	echo "NIM: <b>".$data->nim."</b><br />";
	echo "Nama: <b>".$data->nama."</b><br />";
	echo "Alamat: <b>".$data->alamat."</b><br />";
	echo "IPK: <b>".$data->ipk."</b><br />";
	echo "<hr />";
}

?>
<form action="" method="post">
	Nilai <input type="text" name="nilai" />
	<input type="submit" name="submit" value="kirim" />
</form>
<?php

if(isset($_POST['nilai'])){
	$rs = $db->prepare("select * from mahasiswa where ipk > ?");
	$rs->execute(array($_POST['nilai']));
	$result = $rs->fetchAll(PDO::FETCH_OBJ);

	foreach( $result as $data ){
		echo "NIM: <b>".$data->nim."</b><br />";
		echo "Nama: <b>".$data->nama."</b><br />";
		echo "Alamat: <b>".$data->alamat."</b><br />";
		echo "IPK: <b>".$data->ipk."</b><br />";
		echo "<hr />";
	}
}

$rs = $db->prepare("insert into mahasiswa values (:nim, :nama, :alamat, :ipk)");
$rs->execute(array('nama'=>"Budi", 'nim'=>"A22.23423",
				   'ipk'=>2.2, 'alamat'=>"Klaten"));
