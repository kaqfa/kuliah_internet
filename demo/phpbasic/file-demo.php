<?php

$path = 'img/gallery';

if( is_dir($path) ){
	$listFile = scandir($path);

	foreach ($listFile as $filename) {
		if( is_file($path.'/'.$filename) )
			echo '<img src="'.$path.'/'.$filename.'" />';
	}	
}

?>