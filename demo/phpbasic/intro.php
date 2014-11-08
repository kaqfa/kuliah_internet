<!DOCTYPE html>
<html>
<head>
	<title>Latihan PHP</title>
	<style type="text/css">
	.red{color:red; font-weight: bold;}
	.blue{color: blue; font-weight: bold;}
	</style>
</head>
<body>
	<h2>Ini adalah latihan PHP</h2>
	<?php 
		$variabel = "<h1>Sebuah tulisan</h1>".
					" tulisan kedua "." tulisan ketiga";
		echo $variabel;

		$variabel = 15;
		echo $variabel."<br>";

		$variabel = 5.9;
		echo $variabel."<br>";

		$variabel = true;
		echo $variabel."<br>";

		$nilai = 3;
		$hasil = "";
		$kelas = "";
		if($nilai > 20){
			$hasil = "nilai besar";
			$kelas = "blue";
		} else {
			$hasil = "nilai kecil";
			$kelas = "red";
		}
	?>

	<div>
		Hasil penilaian adalah <span class="<?php echo $kelas; ?>">
		<?php echo $hasil; ?></span>
	</div>

	<?php 
		$ulang = 20; 
		echo "<ol>";
		for ($i=0; $i < $ulang; $i++) { 
			echo "<li> Kode ke ".($i+1)."</li>";
		}
		echo "</ol>";
	?>

	<?php 
		// array
		$menu[0] = array("beranda.php", "menu pertama") ;
		$menu[1] = array("menu kedua", "artikel.php") ;
		$menu[2] = array("teks"=>"menu ketiga", "link"=>"produk.php") ;
		$menu[3] = array("link"=>"tanya-jawab.php", "teks"=>"menu keempat" ) ;
		$menu[4] = array("teks"=>"menu kelima", "link"=>"tentang.php") ;

		echo "<ul>";
		for ($i=0; $i <= 1; $i++) { 
			echo '<li> <a href="'.$menu[$i][1].'">'.
								$menu[$i][0].' </li>';
		}
		for ($i=2; $i <= 4; $i++) { 
			echo '<li> <a href="'.$menu[$i]["link"].'">'.
								$menu[$i]["teks"].' </li>';
		}
		echo "</ul>";

		// associative array
		$menu = array('active'=>"beranda", 'about'=>"tentang program");
		// $menu['active'] = "beranda";
		// $menu['about'] = "tentang program";

		echo $menu['active']."<br>";
		echo $menu['about'];
	?>

	<table>
		<tr>
			<td>No</td>
			<td>Nama</td>
			<td>Alamat</td>
		</tr>
		<!-- pada bagian ini diulang menggunakan PHP -->
		<tr>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<!-- sampai sini -->
	</table>
</body>
</html>