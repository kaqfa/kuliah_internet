<?php
try{
	$sql = 'SELECT * FROM productlines where productLine = ?'; 
	$ssql = $db->prepare($sql);
	$ssql->execute(array($_GET['product']));
	$resProduct = $ssql->fetchAll(PDO::FETCH_ASSOC);
	echo '<pre>';
	//print_r($resProduct);
	echo '</pre>';
} catch (PDOException $e) {
	echo $e->getMessage();
} 
?>
<div class="full_w">
	<div class="h_title">Paragraph, headers, lists, notify</div>
	<?php
		echo '<h2>'.$resProduct[0]['productLine'].'</h2>';
		echo '<p>'.$resProduct[0]['textDescription'].'</p>';
		echo '<div class="entry"> <div class="sep"></div> </div>';
	?>
</div>