<html>
<head>
</head>
<body>
<?php

	// Creo el array asociativo
	$capitales = [ "Reino Unido" => "Londres",
					"Francia" => "París",
					"Italia"  => "Roma",
					"Moldavia" => "Chisinau"];

	// Ordeno el array
	asort($capitales);

	// Inicio la tabla
	echo "<table border=\"1\">";
	
	// Imprimo tantas filas como capitales tenga el array
	foreach($capitales as $pais => $capital) {
		echo "<tr>";
		echo "<td>$pais</td><td>$capital</td>";
		echo "</tr>";
	}

	// Cierro la tabla
	echo "</table>";

?>
</body>
</html>
