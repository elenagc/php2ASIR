<html>
<head>
</head>
<body>
<?php

	// Mi array
	$arr = [4,5,6,9,8,7,4,1,2,9];
	
	// Imprimo la tabla
	echo "<table border='1'>";
	echo "<tr><th>Elemento</th><th>Doble</th></tr>";

	// Imprimo tantas filas como elementos tenga el array
	foreach($arr as $valor) {
		echo "<tr>";
		echo "<td>" . $valor . "</td><td>" . 2*$valor . "</td>";
		echo "</tr>";
	}
	
	// Cierro la tabla
	echo "</table>";

?>
</body>
</html>
