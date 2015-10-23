<!DOCTYPE html>
<html>
<head>
	<title>Latihan Javascript</title>
	<script type="text/javascript">
		function getMessage() {
			var amount = Math.round(Math.random() * 100000);
			var message = "You won $" + amount + "!\n" +
			"To collect your winnings, send your credit card\n" +
			"and bank details to oil-minister@phisher.com.";
			return(message);
		} 	

		function showWinnings1() {
			document.write(message);
			alert(getMessage());
		}

		function showWinnings2() {
			document.getElementById('tampilan').innerHTML = "<h1><blink>"+ getMessage() +"</blink></h1>";
		}

		function tampil1(){
			alert("tampil di pop up");
		}

		function tampil2(){
			document.getElementById('tampilan').innerHTML = "string tampil di elemen sesuai id";
		}

		function tampil3(){
			document.write('membuat halaman kosong untuk menampilkan string');
		}

		function tampil4(tulisan, angka, angka_panjang){
			console.log(tulisan);
		}

		function tampilArray(){
			var names = ['Andi', 'Adi', 'Edi', 'Budi', 'Udin'];
			for (var i = 0; i < names.length; i++) {
				console.log(names[i]);
			};
		}
	</script>
</head>
<body>
<input type="button" onclick="showWinnings1()" value="Tampilkan Pop Up" />
<input type="button" onclick="showWinnings2()" value="Tampilkan di Elemen di Bawah" />
<input type="button" onclick="tampilArray()" value="Tampilkan Array" />

<div id="tampilan"></div>
<hr>

<input type="button" value="Tampil 1" onclick="tampil1()">	
<input type="button" value="Tampil 2" onclick="tampil2()">	
<input type="button" value="Tampil 3" onclick="tampil3()">	
<input type="button" value="Tampil 4" onclick="tampil4(this.value)">	
</div>
</body>
</html>