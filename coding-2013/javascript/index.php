<!DOCTYPE html>
<html>
	<head>
		<title>Tugas yang Harus Dikerjakan</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<script type="text/javascript">
			function tampilTeks(){
				document.getElementById("tempat_teks").innerHTML = "Teks baru yang ditampilkan";
			}

			function inputTeks(){
				document.getElementById("input_teks").value = "isinya inputan";
			}

			function rubahStyle(){
				document.getElementById('head_tabel').style.color = '#990000';
				document.getElementById('head_tabel').style.fontFamily = 'consolas';
				document.getElementById('tempat_teks').style.backgroundColor = '#990000';
				document.getElementById('input_teks').setAttribute("style","font-family: Courier; background-color: yellow");
			}

			function formAction(){
					
					alert();
			}
		</script>
	</head>
	<body>
		<div id="content">
			<header> Aplikasi Berbasis Web </header>
			<nav id="vr">
				<div class="side">
					<h3>Modul Pertama</h3>
					<ul class="menu">
						<li><a href="">Form Satu</a></li>
						<li><a href="">Form Dua</a></li>
						<li><a href="">Form Tiga</a></li>
						<li><a href="">Form Empat</a></li>
						<li><a href="">Form lima</a></li>
					</ul>
				</div>
				<div class="side">
					<h3>Modul Kedua</h3>
					<ul class="menu">
						<li><input type="button" value="Tampil Teks" onclick="tampilTeks()" /></li>
						<li><input type="button" value="Isi Teks" onclick="inputTeks()" /></li>
						<li><input type="button" value="Rubah Style" onclick="rubahStyle()" /></li>
					</ul>
				</div>
			</nav>
			<div id="rightside">
				<nav id="hr">
					<a href="#" class="icon"><img src="gambar/One-storied house SH.png" /></a>
					<a href="#" class="icon"><img src="gambar/Cash register.png" /></a>
					<a href="#" class="icon"><img src="gambar/Hard drive SH.png" /></a>
					<a href="#" class="icon"><img src="gambar/Card file.png" /></a>
				</nav>
				<div id="mainarea">
					<h2 id="head_tabel">Tabel Penerimaan Mahasiswa</h2>					

					<table style="width:450px;">
						<tr>
							<td>Tampilkan Teks</td>
							<td><p id="tempat_teks">&nbsp;</p></td>
						</tr>
						<tr>
							<td>Teks Input</td>
							<td><p><input type="text" id="input_teks" /></p></td>
						</tr>
					</table>

					<hr />
					<form name="input_form" >
					<table style="width:450px;">
						<tr>
							<td>NIM</td>
							<td><input type="text"  name="nim" /></td>
						</tr>
						<tr>
							<td>Nama</td>
							<td><input type="text" name="nama" /></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><input type="text" name="email" /></td>
						</tr>
						<tr>
							<td>Telepon</td>
							<td><input type="text" name="telepon" /></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td><input type="button" name="simpan" value="Simpan" onclick="formAction()" /></td>
						</tr>
					</table>
					</form>
					<hr />

					<table id="table_data">
						<thead>
							<tr>
								<th>NIM</th>
								<th>Nama</th>
								<th>Email</th>
								<th>Telepon</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>A11.2013.01234</td>
								<td>Sebuah Nama</td>
								<td>sebuahnama@mhs.dinus.ac.id</td>
								<td>08123456789</td>
							</tr>
							<tr>
								<td>A11.2013.01234</td>
								<td>Sebuah Nama</td>
								<td>sebuahnama@mhs.dinus.ac.id</td>
								<td>08123456789</td>
							</tr>
							<tr>
								<td>A11.2013.01234</td>
								<td>Sebuah Nama</td>
								<td>sebuahnama@mhs.dinus.ac.id</td>
								<td>08123456789</td>
							</tr>
							<tr>
								<td>A11.2013.01234</td>
								<td>Sebuah Nama</td>
								<td>sebuahnama@mhs.dinus.ac.id</td>
								<td>08123456789</td>
							</tr>
							<tr>
								<td>A11.2013.01234</td>
								<td>Sebuah Nama</td>
								<td>sebuahnama@mhs.dinus.ac.id</td>
								<td>08123456789</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>			
		</div>
	</body>
</html>