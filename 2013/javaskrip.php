<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript">
		var num1, num2, sum;
		// num1 = prompt("Enter first number");
		// num2 = prompt("Enter second number");
		// sum = num1 + num2;
		// alert("Sum = " + sum);

		function tampil(){
			// teks = document.getElementById('textPlace');
			// teks.innerHTML = 'teks baru yang ditampilkan';
			$('#textPlace').html('teks baru yang ditampilkan').show('slow');
		}
		function ubah(){
			// teks = document.getElementById('textPlace');
			$('#textPlace').hide('slow');
			// teks.style.color = '#ffff00';
			// teks.style.backgroundColor = '#005500';
		}
		function validasi(elm){
			if(elm.value == ''){
				alert('isikan inputan terlebih dahulu');
			}
		}
	</script>
</head>
<body>
	<div id="textPlace"></div>

	<input type="button" value="tampilkan" onclick="tampil()" >
	<input type="button" value="sembunyikan" onclick="ubah()" >
	<input type="text" values="" onblur="validasi(this)" >

</body>
</html>