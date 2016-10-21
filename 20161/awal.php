<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>First Page of HTML</title>
	<!-- <link rel="stylesheet" href="gaya.css"> -->
	<style>
		body { background-color: #cccccc; }
		p {font-style: italic; font-size: 17px; font-family: arial;}
		#site_title {color: #fc4a32; text-transform: uppercase;}
		.big_blue {color: blue; font-size: 20px; font-weight: bold;}
		.nav a {color: green; text-decoration: none;}
	</style>
</head>
<body>
	<h1 id="site_title">This is The Title</h1>
	<button>Default Button</button>
	<div class="nav">
		<ul>
			<li><a href="">Menu 1</a></li>
			<li><a href="">Menu 2</a></li>
			<li><a href="">Menu 3</a></li>
			<li><a href="">Menu 4</a></li>
			<li><a href="">Menu 5</a></li>
			<?php
				$nama = "Fahri";
				echo '<li><a href="">Menu Profil '.$nama.'</a></li>';
			?>			
		</ul>
	</div>
	<div class="widgets">
		<h3>Side Widget</h3>
		<div>
			<p class="big_blue">Content of the widget</p>
		</div>
	</div>
	<div id="maincontent">
		<h3>Content Title</h3>
		<p>First Paragraph</p>
		<p class="sitasi">Second Paragraph</p>
		<p class="">Paragraf ketiga yang <span class="big_blue">tulisannya</span> 
		<span class="dark_yellow">cukup panjang</span> sekali. Karena mau dibuat contoh penulisan elemen <a href="#">yang panjang</a>.</p>
	</div>

	<table border="1">
		<tr>
			<th>No.</th>
			<th>Nama</th>
			<th><a href="mailto:email@gmail.com">Email</a></th>
		</tr>
		<?php for($i = 0; $i < 10; $i++) { ?>
		<tr>
			<td><?php echo $i+1; ?></td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<?php } ?>
	</table>

	<img src="http://localhost/internet/2015/gambar/One-storied%20house%20SH.png" alt="">
</body>
</html>