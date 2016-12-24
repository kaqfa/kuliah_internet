<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Student</title>
</head>
<body>
	<h2>List of Students</h2>
	<ul>
	<?php foreach ($studentList as $data) { ?>
		<li>
		<?php 
		echo $data['nim']." - ".$data['nama'].
				 " [".$this->student->getStatus($data['status'])."]"; ?></li>
	<?php } ?>
	</ul>
</body>
</html>