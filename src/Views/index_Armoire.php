<?php  
require_once'../../vendor/autoload.php';
require'../Models/Armoire.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mes Chaussetes</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.css">
</head>
<body>
<h1>Le roi de la chaussettes</h1>
	<table class="ui table">
		<th>id</th>
		<th>description</th>
		<th>pointure</th>
		<th>couleur</th>
		<th>temp_lavage</th>
		<th>date lavage</th>
		<?php 
		$chaussettes = Armoire::all(10);
		foreach ($chaussettes as $socks) {
			?>
			<tr>
				
				<td>
					<a href= "info1Sock.php?id=<?php echo $socks->id;?>"><?= $socks->id;?></a>
				</td>
				<td><?php echo $socks->description;?></td>
				<td><?php echo $socks->pointure;?></td>
				<td><?php echo $socks->couleur;?></td>
				<td><?php echo $socks->temp_lavage;?>°C</td>
				<td><?php echo $socks->date_lavage;?></td>
			</tr>
			<?php
		}
		?>
	</table>

	
</body>
</html>