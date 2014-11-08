<?php include "../library/fungsi-class.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Latihan Fungsi dan Object Oriented dalam PHP</title>
</head>
<body>
	<h1><?php echo tampilNama("Fahri"); ?></h1>
	<p>Hasil penjumlahan dari 5 dan 9 adalah <?php echo 50 - tambah(5,9); ?></p>
	<h3><?php pangkat(7, 9); ?></h3>
	<br>

	<?php 
		$mhs = new Mahasiswa();
		$mhs->printInfo();
		echo "<br />";
		$mhs->initialize("A12345", "Ingsun", 3.9);
		$mhs->printInfo();
	?>
</body>
</html>