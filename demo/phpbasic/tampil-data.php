<?php
	
function getGender($kode){
	$gender = 'Laki-laki';
	if($kode == 'P'){
		$gender = 'Perempuan';
	}
	return $gender;
}
?>
<h2> <?php echo $_POST['fullname'];?> </h2>
<h2> <?php echo getGender($_POST['gender']);?> </h2>
<h3> <?php echo $_REQUEST['address'];?> </h3>
