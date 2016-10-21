<?php
try{
	$sql = "SELECT * FROM employees";
	$resEmployees = $db->query($sql);

	$sql = 'SELECT * FROM productlines';
	$resProduct = $db->query($sql);
} catch (PDOException $e) {
	echo $e->getMessage();
} 
?>
<div class="full_w">
	<div class="h_title">Manage pages - table</div>
	<h2>Lorem ipsum dolor sit ame</h2>
	<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumyeirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diamvolupt</p>

	<div class="entry">
		<div class="sep"></div>
	</div>
	<table>
		<thead>
			<tr>
				<th scope="col">Emp Number</th>
				<th scope="col">Name</th>
				<th scope="col">Email</th>
				<th scope="col">Extension</th>
				<th scope="col">Job Title</th>
				<th scope="col" style="width: 65px;">Action</th>
			</tr>
		</thead>
			
		<tbody>
			<?php 
			foreach($resEmployees as $data){  	
				echo '<tr>
						<td class="align-center">'.$data['employeeNumber'].'</td>
						<td>'.$data['firstName'].' '.$data['lastName'].'</td>
						<td>'.$data['email'].'</td>
						<td>'.$data['extension'].'</td>
						<td>'.$data['jobTitle'].'</td>
						<td>
							<a href="?page=edit&empNumber='.$data['employeeNumber'].'" 
									class="table-icon edit" title="Edit"></a>
							<a href="#" class="table-icon delete" title="Delete"></a>
						</td>
					</tr>'; 
			} 
			?>
		</tbody>
	</table>
	<div class="entry">
		<div class="pagination">
			<span>« First</span>
			<span class="active">1</span>
			<a href="">2</a>
			<a href="">3</a>
			<a href="">4</a>
			<span>...</span>
			<a href="">23</a>
			<a href="">24</a>
			<a href="">Last »</a>
		</div>
		<div class="sep"></div>		
		<a class="button add" href="">Add new page</a> <a class="button" href="">Categories</a> 
	</div>
</div>

<div class="full_w">
	<div class="h_title">Paragraph, headers, lists, notify</div>
	<?php
	foreach($resProduct as $data){
		echo '<h2>'.$data['productLine'].'</h2>';
		echo '<p>'.$data['textDescription'].'</p>';
		echo '<div class="entry"> <div class="sep"></div> </div>';
	}
	?>
</div>