<?php 
require'../Models/Armoire.php'; 
require_once'../../vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>La pair de chaussette</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.css">
</head>
<body>
<h1>La chaussette</h1>
	<?php $chaussettes = Armoire::all(); 
	foreach ($chaussettes as $socks) {
		if ($_GET['id'] === $socks->id) {

			?>
			<div>Réf : <?php echo $socks->id ?></div>
			<div>Couleur : <?php echo $socks->couleur ?></div>
			<div>Pointure :  <?php echo $socks->pointure?></div>
			<div>Description : <?php echo $socks->description ?></div>
			<div>Température de lavage : <?php echo $socks->temp_lavage?> °C</div>
			<div>Date du dernier lavage : <?php echo $socks->date_lavage?></div>
			<?php	
		}
	}
	?>
	<a href="index_Armoire.php">Retour à la liste</a>
</body>
</html>

