<?php 
require "arrays.php";
?>
<html>
<head>
	<title>Central Page for Array Manipulation</title>
</head>
<body>
	<!-- <h2>Nama Hari</h2>
	<table border="1" width="300">		
		<tr>
			<th>Index</th>
			<th>Nama Hari</th>
		</tr>
		<?php			
			for($day = 0; $day < 7; $day++){
				echo '<tr>
								<td>'.$day.'</td>
								<td>'.$idDays[$day].'</td>
							</tr>';
			}			
		?>
	</table>

	<h2>Nama Bulan</h2>
	<table border="1" width="300">		
		<tr>
			<th>Index</th>
			<th>Nama Bulan</th>
		</tr>
		<?php			
			for($month = 0; $month < 12; $month++){
				echo '<tr>
								<td>'.$month.'</td>
								<td>'.$idMonths[$month].'</td>
							</tr>';
			}			
		?>
	</table> -->
	
	<?php 		
		echo '<pre>';
		print_r($idDays);
		echo "<br />";
		print_r($idMonths);
		echo "<br />";
		print_r($matkul);
		echo '</pre>';
		//print_r($listMhs);
	?>
</body>
</html>