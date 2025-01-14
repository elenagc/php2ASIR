<html>
<head>
</head>
<body>
<?php

	// Mi array
	$arr = [["Juan", 19],
			["Alba", 52],
			["Mónica", 41]];
	
	// Itero por los arrays
	foreach($arr as $fila) {
		echo "La edad de " .$fila[0]. " es " .$fila[1]. "<br>";
	}

?>
</body>
</html>
