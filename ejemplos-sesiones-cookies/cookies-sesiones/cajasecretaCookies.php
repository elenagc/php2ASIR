<?php
// Establecer la combinación correcta
define('COMBINACION_CORRECTA', '1234');

// Comprobar si ya existe el contador de intentos
if (isset($_COOKIE['intentos'])) {
    $intentos = $_COOKIE['intentos'];
} else {
    $intentos = 0;
}

// Incrementar el contador de intentos
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $intentos++;
    setcookie('intentos', $intentos, time() + 3600); // Guardar el contador por una hora
    $combinacion_introducida = $_POST['combinacion'];

    if ($combinacion_introducida === COMBINACION_CORRECTA) {
        echo "La caja fuerte se ha abierto satisfactoriamente";
        setcookie('intentos', '', time() - 3600); // Borrar la cookie
    } else {
        if ($intentos < 4) {
            echo "Lo siento, esa no es la combinación. Te quedan " . (4 - $intentos) . " intentos.";
        } else {
            echo "Lo siento, has agotado todos los intentos.";
            setcookie('intentos', '', time() - 3600); // Borrar la cookie
        }
    }
}
?>

<form method="POST">
    Introduce la combinación: <input type="text" name="combinacion">
    <input type="submit" value="Abrir">
</form>
