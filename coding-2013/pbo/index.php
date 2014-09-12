<?php include"circle.php"; ?>
<html>
<head>
	<title>Uji Class</title>
</head>
<body>
	<?php
		$lingkaran = new Circle();
		$lingkaran->radius = 5;
		$lingkaran->color = "Merah";

		echo "<p>".$lingkaran->getArea()."</p>";
		$lingkaran->toString();
	?>
</body>
</html>