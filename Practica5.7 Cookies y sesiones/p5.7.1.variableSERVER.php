<?php
// Mostrar todo el contenido de la variable $_SERVER
print "<h2>Contenido de \$_SERVER</h2>";
print "<pre>";
print_r($_SERVER);
print "</pre>";

// Mostrar la dirección IP del cliente
$ip_cliente = $_SERVER['REMOTE_ADDR'];
print "<p><strong>Dirección IP del cliente:</strong> $ip_cliente</p>";

// Mostrar el nombre del servidor
$nombre_servidor = $_SERVER['SERVER_NAME'];
print "<p><strong>Nombre del servidor:</strong> $nombre_servidor</p>";

// Mostrar el puerto que está escuchando
$puerto_servidor = $_SERVER['SERVER_PORT'];
print "<p><strong>Puerto que está escuchando:</strong> $puerto_servidor</p>";

// Mostrar la ruta raíz donde se encuentra la web (DocumentRoot)
$ruta_document_root = $_SERVER['DOCUMENT_ROOT'];
print "<p><strong>Ruta raíz del servidor (DocumentRoot):</strong> $ruta_document_root</p>";
?>
