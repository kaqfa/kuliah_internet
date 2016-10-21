<?php
try{
	$sql = 'SELECT * FROM productlines';
	$resProduct = $db->query($sql);
} catch (PDOException $e) {
	echo $e->getMessage();
} 
?>
<div class="box">
	<div class="h_title">&#8250; Product Category</div>
	<ul>
		<?php
			foreach($resProduct as $data){
				echo '<li class="b2"><a class="icon page" 
					href="?page=detail&product='.$data['productLine'].'">'
					.$data['productLine'].'</a></li>';
			}
		?>
	</ul>
</div>