<!DOCTYPE html>
<html>
<head>
	<title>Latihan matematika pake JavaScript</title>
	<script type="text/javascript">
	function tambah () {
		var inp1 = document.getElementById('input1');
		var inp2 = document.getElementById('input2');
		var hsl = document.getElementById('hasil');

		angkaHasil = parseInt(inp1.value) + parseInt(inp2.value);
		hsl.value = angkaHasil;
	}
	</script>
</head>
<body>
	<table>
		<tr>
			<td> <input type="text" id="input1"> </td>
			<td> <strong>+</strong> </td>
			<td> <input type="text" id="input2"> </td>
		</tr>
		<tr>
			<td> <input type="button" onclick="tambah()" value="Hitung"> </td>
			<td> &nbsp; </td>
			<td> <input type="text" id="hasil"> </td>
		</tr>
	</table>
</body>
</html>