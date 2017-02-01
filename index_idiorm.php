<?php 
require'vendor/autoload.php';
ORM::configure('mysql:host=localhost;dbname=mon_armoire;charset=utf8');
ORM::configure('username', 'root');
ORM::configure('password', 'root');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	$mes_chaussettes = ORM::for_table('mes_chaussettes')->where('pointure', 40)->find_many();
	foreach ($mes_chaussettes as $chaussette) {
		// $chaussette->couleur = 'rose';
		// $chaussette->save();
		echo $chaussette->id;

	}


	 ?>
</body>
</html>
