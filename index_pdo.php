<?php  
$bdd = new PDO(
	'mysql:host=localhost;dbname=mon_armoire;charset=utf8', 'root','root'
	);
	?>

	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
	</head>
	<body>
		<?php  
		$reponse = $bdd->query('SELECT * FROM mes_chaussettes');
		?>
		<table class="ui table">
			<th>Id</th>
			<th>Pointure</th>
			<th>Température de lavage</th>
			<th>Description </th>
			<th>Couleur</th>
			<th>Date_lavage</th>
			<tr>
				<?php 
				while ($donnees = $reponse->fetch()) 
				{
					?>
					<td><?php echo $donnees['id'];?></td>
					<td><?php echo $donnees['pointure'];?></td>
					<td><?php echo $donnees['temp_lavage'];?></td>
					<td><?php echo $donnees['description']?></td>
					<td><?php echo $donnees['couleur'] ?></td>
					<td><?php echo $donnees['date_lavage'] ?></td>
				</tr>
				<?php
			}
			$reponse->closeCursor(); ?>
			<?php

			$req = $bdd->prepare(
				'SELECT * FROM mes_chaussettes 
				WHERE couleur = ? '
				);
			$req->execute(
				array($_GET['couleur'])
				);

				?>

			</table>
		</body>
		</html>
