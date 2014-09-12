<?php
if( isset($_POST['save']) ){
	try{
		$sql = 'insert into employees value 
				(:employeeNumber, :lastName, :firstName, :extension, 
				:email, :officeCode, :reportsTo, :jobTitle)';
		$ssql = $db->prepare($sql);
		$ssql->execute(array(':employeeNumber' => $_POST['employeeNumber'], ':lastName' => $_POST['lastName'], 
							':firstName' => $_POST['firstName'], ':extension' => $_POST['extension'], 
							':email' => $_POST['email'], ':officeCode' => $_POST['officeCode'], 
							':reportsTo' => $_POST['reportsTo'], ':jobTitle' => $_POST['jobTitle']));
	} catch (PDOException $e){
		echo $e->getMessage();
	}
}

try{
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
		<label for="employeeNumber">Employee Number</label>
		<input id="employeeNumber" type="text" name="employeeNumber" class="text" />
	</div>
	<div class="element">
		<label for="lastname">Last Name</label>
		<input id="lastname" type="text" name="lastName" class="text" />
	</div>
	<div class="element">
		<label for="firstname">First Name</label>
		<input id="firstname" type="text" name="firstName" class="text" />
	</div>
	<div class="element">
		<label for="extension">Extension</label>
		<input id="extension" type="text" name="extension" class="text" />
	</div>
	<div class="element">
		<label for="email">Email </label>
		<input id="email" type="email" name="email" class="text" />
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
		<button type="submit" name="save" class="add">Save page</button> 
		<button type="reset" class="cancel">Cancel</button>
	</div>
</form>
</div>