<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Halaman Baru</title>
</head>
<body>
	<h1>Tampilan Baru</h1>
	<h2><a href="google.com">Tampilan Baru</a></h2>
	<h3><a href="baru.html">Tampilan Baru</a></h3>
	<?php
		$text = "<p>Ini yang ditampilkan lagi<p>";
		echo "<p>Ini yang ditampilkan</p>"; // print
		echo $text;
	?>
	<p>Ini adalah tampilan baru untuk <b>HTML</b></p>
	<ul>
		<?php
			for($i = 0; $i < 10; $i++)
				echo '<li>Bullet '.($i+1).'</li>';
		?>
	</ul>
	<ol>
		<li>Numbering</li>
		<li>Numbering</li>
		<li>Numbering</li>
	</ol>
	<img src="house.png" alt="gambar rumah dengan atap biru">
	<table border="1">
		<tr>
			<th>Judul 1</th>
			<th>Judul 2</th>
			<th>Judul 3</th>
		</tr>
		<tr>
			<td>Konten data 1</td>
			<td colspan="2">Konten data 2</td>
		</tr>
		<tr>
			<td rowspan="2">Konten data 1</td>
			<td>Konten data 2</td>
			<td>Konten data 3</td>
		</tr>
		<tr>
			<td>Konten data 2</td>
			<td>Konten data 3</td>
		</tr>
		<tr>
			<td>Konten data 1</td>
			<td colspan="2" rowspan="2">Konten data 2</td>
		</tr>
		<tr>
			<td>Konten data 1</td>
		</tr>
	</table>
</body>
</html>
