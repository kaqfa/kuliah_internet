<?php require "Student.php"; ?>
<html>
	<head>
		<title>.:PHP PBO:.</title>
	</head>
	<body>
		<h1>PHP PBO</h1>
		<?php
			$student = new Student();
			$dataMhs = $student->getAllMhs();

			foreach($dataMhs as $data){
				echo "Nama:".$data->nama."<br />";
			}


		?>
	</body>
</html>
