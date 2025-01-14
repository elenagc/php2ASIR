<?php
// Es importante definir la cookie antes de todo.
//Creo una cookie llamada nombre.
setcookie("nombre", "Carlos", time() + 60*60*24*14);
?>
<html>
    <head>
    <title>Ejemplos de Cookies.</title>
    </head>
<body>
    <?php
    // Si existe la cookie nombre mostramos el mensaje.
    if (isset($_COOKIE["nombre"])) {
            $nombre = $_COOKIE["nombre"];
            print("<p>¡Hola $nombre!.</p>");
    }
    else {
            print('<p>Se ha definido la cookie <strong>"nombre"</strong>.
            Recarga la página para que tenga efecto.</p>');
    }
    ?>
</body>
</html>