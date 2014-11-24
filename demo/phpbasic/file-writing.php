<?php
	$file_active = fopen("filebaru.txt", 'a+') or die("tidak dapat membuka file");

	// fwrite($file_active, "Tulisan Baru");

	while ( !feof($file_active)) {
		$tulisan = fgets($file_active);
		echo $tulisan.'<br />';
	}
	

	fclose($file_active);
?>