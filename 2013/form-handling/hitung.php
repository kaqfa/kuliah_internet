<html>
<head>
	<title>Barang</title>
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
			<th><?php echo $_POST['jumlah1'];?></th>
			<th><?php echo $_POST['harga1'];?></th>
			<th><?php echo $_POST['jumlah1']* $_POST['harga1'];?></th>
		</tr>
		<tr>
			<th>Monitor</th>
			<th><?php echo $_POST['jumlah2'];?></th>
			<th><?php echo $_POST['harga2'];?></th>
			<th><?php echo $_POST['jumlah2']* $_POST['harga2'];?></th>
		</tr>
		<tr>
			<th>Laptop</th>
			<th><?php echo $_POST['jumlah3'];?></th>
			<th><?php echo $_POST['harga3'];?></th>
			<th><?php echo $_POST['jumlah3']* $_POST['harga3'];?></th>
		</tr>
		<tr>
			<th>Count</th>
			<th><input type="submit" value="Count"></th>
			<th>Grand Total</th>
			<th><?php echo $GT = $_POST['jumlah1']* $_POST['harga1']+$_POST['jumlah2']* $_POST['harga2']+$_POST['jumlah3']* $_POST['harga3']  ?></th>
		</tr>
		<?php 
		if($GT > 5000000 && $GT <= 10000000)
			{
				$DC = $GT * 0.02;
			}
		elseif($GT > 10000000 && $GT <= 20000000)
			{
				$DC = $GT * 0.05;
			}
		elseif($GT > 20000000)
		{
			$DC = $GT *0.1;
		}
		?>
		<tr>
			<th>Discount</th>
			<th><?php echo $DC ?></th>
			<th>Total to Pay</th>
			<th><?php echo $GT - $DC ;?></th>
		</tr>
	</table>
	</form>
</body>
</html>
