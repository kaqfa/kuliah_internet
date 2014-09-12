<html>
<head>
	<title>Inventory System</title>
</head>
<body>
	<form action="hitung.php" method="post"> 
	<table border="1">
		<tr>
			<th>Goods</th>
			<th>Amount</th>
			<th>Price</th>
			<th>Total</th>
		</tr>
		<tr>
			<th>Printer</th>
			<th><input type="text" name="jumlah1" /></th>
			<th><input type="text" name="harga1" /></th>
			<th>&nbsp;</th>
		</tr>
		<tr>
			<th>Monitor</th>
			<th><input type="text" name="jumlah2" /></th>
			<th><input type="text" name="harga2" /></th>
			<th>&nbsp;</th>
		</tr>
		<tr>
			<th>Laptop</th>
			<th><input type="text" name="jumlah3" /></th>
			<th><input type="text" name="harga3" /></th>
			<th>&nbsp;</th>
		</tr>
		<tr>
			<th>Count</th>
			<th><input type="submit" value="Count"></th>
			<th>Grand Total</th>
			<th>&nbsp;</th>
		</tr>
	</table>
	</form>
</body>
</html>