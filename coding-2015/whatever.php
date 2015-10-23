<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Biggest Header</h1>
	<h2>Bigger Header</h2>
	<h3>Big Header</h3>	

	<ul>
	<?php
		$name = array('Ahmad', 'Ali', "Umar", "Yohanes", "Syafi'i");
		for ($i=0; $i < 5; $i++) { 
			echo "<li>$name[$i]</li>";
		}
	?>
	</ul>	

	<ol>
		<?php			
			for ($i=0; $i < 5; $i++) {
				echo "<li>$name[$i]</li>";
			}
		?>
	</ol>
</body>
</html>