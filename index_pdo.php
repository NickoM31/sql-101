<?php  
$bdd = new PDO(
	'mysql:host=localhost;dbname=mon_armoire;charset=utf8', 'root','root'
	);
	?>

	<?php  
	$reponse = $bdd->query('SELECT * FROM mes_chaussettes');
	?>

	<table>
		<thead>
			<th>Id</th>
			<th>Pointure</th>
			<th>temp_lavage</th>
			<th>description </th>
			<th>couleur</th>
			<th>date_lavage</th>
		</thead>
		<tr>
			<?php 
			while ($donnees = $reponse->fetch()) 
			{
				?>
				<td><?php echo $donnees['id']; ?></td>
				<td><?php echo $donnees['pointure']; ?></td>
			</tr>
		</table>
		<?php
	}

	$reponse->closeCursor() ?>
