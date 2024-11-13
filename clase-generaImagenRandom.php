<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Imagen aleatoria</title>
</head>
<body>
<?php 
$numero=mt_rand(1,3);

	print "<img src='".$numero.".png'>";


?>
</body>
</html>