<?php

include "matakuliah.php";

// $stmt = $db->prepare('insert into matakuliah values (null, ?, ?, ?)');
// $stmt->execute(array('Kecerdasan Buatan', 3, 5));
// $stmt->execute(array('Algoritma Pemrograman', 4, 2));
// $stmt->execute(array('Pengenalan Teknologi Informasi', 4, 1));
$matkul = new Matakuliah();

// $matkul->insertMatkul('TA 1', 2, 7);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Koneksi Basis Data dengan PDO</title>
</head>
<body>
	<h1>Data Mata Kuliah TI</h1>
	<ul>
	<?php
	$res = $matkul->getAllMatkul('semester = 5');
	foreach($res as $data){
		echo '<li>'.$data['nama_matkul'].'</li>';
	}
	?>
	</ul>

	<table border="1">
		<tr>
			<td>Kode</td>
			<td>Nama Matakuliah</td>
			<td>SKS</td>
			<td>Semester</td>
			<td>Status</td>
		</tr>
		<?php
		$res = $matkul->getActiveMatkul('semester = 5');
		foreach ($res as $data) {
		?>
		<tr>
			<td><?php echo $data['id']; ?></td>
			<td><?php echo $data['nama_matkul']; ?></td>
			<td><?php echo $data['sks']; ?></td>
			<td><?php echo $data['semester']; ?></td>
			<td><?php echo $matkul->getStatus($data['status']); ?></td>
		</tr>
		<?php
		} ?>
	</table>
</body>
</html>
