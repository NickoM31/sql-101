<?php 
	if (!isset($_GET['id'])) {
		$chaussettes = Armoire::all();
		echo 'error';
	}else{ 
		$chaussettes = Armoire::get($_GET['id']);

	}
	
	?>