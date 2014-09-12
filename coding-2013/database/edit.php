<?php
if(isset($_POST['submit'])){
	try{
		$sql = 'update employees set lastName = :lastName, 
				firstName = :firstName, extension = :extension, 
				email = :email, officeCode = :officeCode, reportsTo = :reportsTo, 
				jobTitle = :jobTitle
				where employeeNumber = :employeeNumber';
		$ssql = $db->prepare($sql);
		$ssql->execute(array(':employeeNumber' => $_GET['empNumber'], ':lastName' => $_POST['lastName'], 
							':firstName' => $_POST['firstName'], ':extension' => $_POST['extension'], 
							':email' => $_POST['email'], ':officeCode' => $_POST['officeCode'], 
							':reportsTo' => $_POST['reportsTo'], ':jobTitle' => $_POST['jobTitle']));
	} catch (PDOException $e){
		echo $e->getMessage();
	}
}

try{
	$sql = 'SELECT * FROM employees where employeeNumber = ?'; 
	$ssql = $db->prepare($sql);
	$ssql->execute(array($_GET['empNumber']));
	$detail = $ssql->fetchAll(PDO::FETCH_ASSOC);

	$sql = 'SELECT officeCode, city FROM offices';
	$resOffice = $db->query($sql);

	$sql = 'SELECT employeeNumber, concat(firstName, " ", lastName) as name 
				from employees where jobTitle != "Sales Rep"';
	$resEmployee = $db->query($sql);
} catch (PDOException $e) {
	echo $e->getMessage();
}
?>
<div class="full_w">
<div class="h_title">Add new page - form elements</div>
<form action="" method="post">
	
	<div class="element">
		<label for="lastname">Last Name</label>
		<?php echo '<input id="lastname" type="text" name="lastName" 
						value="'.$detail[0]['lastName'].'" class="text" />';?>
		
	</div>
	<div class="element">
		<label for="firstname">First Name</label>
		<?php echo '<input id="firstname" type="text" name="firstName" 
						value="'.$detail[0]['firstName'].'" class="text" />';?>
		
	</div>
	<div class="element">
		<label for="extension">Extension</label>
		<?php echo '<input id="extension" type="text" name="extension" value="'.$detail[0]['extension'].'" class="text" />';?>
		
	</div>
	<div class="element">
		<label for="email">Email </label>
		<?php echo '<input id="email" type="email" name="email" value="'.$detail[0]['email'].'" class="text" />';?>
		
	</div>
	<div class="element">
		<label for="officeCode">Office </label>
		<select name="officeCode" class="">
			<option value="0">-- select office --</option>
			<?php foreach($resOffice as $data){
				echo '<option value="'.$data['officeCode'].'">'.$data['city'].'</option>';
			}?>
		</select>
	</div>
	<div class="element">
		<label for="reportsTo">Reports to </label>
		<select name="reportsTo" class="">
			<option value="0">-- select manager --</option>
			<?php foreach($resEmployee as $data){
				echo '<option value="'.$data['employeeNumber'].'">'.$data['name'].'</option>';
			}?>
		</select>
	</div>
	<input id="jobTitle" name="jobTitle" type="hidden" value="Sales Rep" />
	<div class="entry">
		<button type="submit" name="submit" class="add">Save page</button> 
		<button type="reset" class="cancel">Cancel</button>
	</div>
</form>
</div>