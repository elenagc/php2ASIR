<?php
// Es importante definir la cookie antes de todo. Si no existe la cookie "numVeces"
// es que no se ha entrado nunca en la página. En tal caso mostramos el formulario.
$tiempoExpiracion = time() + 60*60*24*15;
if (isset($_COOKIE["numVeces"]) == false) {
    setcookie("numVeces", "2");
    $mensajeCookie = print " <p>Es la primera vez que entras. Por favor, indica tu nombre:</p>
                            <form action='' method='get'>
                            <label forname='nombre'>Nombre</label>
                            <input type='text' name='nombre'>
                            <input type='submit' name='enviar'>
                            </form>\n";

}else {
    // Si se ha enviado el formulario, se genera la cookie "nombre".
    if (isset($_REQUEST["enviar"])) {
        $nombre = $_REQUEST["nombre"];
        setcookie("nombre", $nombre, $tiempoExpiracion);
        $mensajeCookie = "<p>¡Para la próxima ya conozco tu nombre!.</p>\n";
    }
    else {
        // Mostramos el mensaje indicando el número de veces que ha entrado.
        $nombre = $_COOKIE["nombre"];
        $numVeces = $_COOKIE["numVeces"];
        $mensajeCookie = "<p>¡Hola $nombre!. Has estado aquí $numVeces veces.</p>\n";
        // Actualizamos la cookie "numVeces" para la próxima vez.
        $numVeces = $numVeces + 1;
        setcookie("numVeces", $numVeces, $tiempoExpiracion);
    }
}
    ?>
    <html>
    <head>
    <title>Ejemplos de Cookies.</title>
    </head>
    <body>
    <?php
    print($mensajeCookie);
    ?>
    </body>
    </html>
}