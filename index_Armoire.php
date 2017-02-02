<?php  
require'vendor/autoload.php';
require'Armoire.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<table>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<?php 
		$chaussettes = Armoire::all();
		foreach ($chaussettes as $socks) {
		?>
		<tr>
			<td><?php echo $socks->id;?></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<?php
		}
		?>
	</table>
</body>
</html>