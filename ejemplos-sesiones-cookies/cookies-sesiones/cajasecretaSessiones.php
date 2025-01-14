<?php
session_start();

// Establecer la combinación correcta
define('COMBINACION_CORRECTA', '1234');

// Inicializar el contador de intentos si no existe
if (!isset($_SESSION['intentos'])) {
    $_SESSION['intentos'] = 0;
}

// Incrementar el contador de intentos
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['intentos']++;
    $combinacion_introducida = $_POST['combinacion'];

    if ($combinacion_introducida === COMBINACION_CORRECTA) {
        echo "La caja fuerte se ha abierto satisfactoriamente";
        session_destroy(); // Terminar la sesión
    } else {
        if ($_SESSION['intentos'] < 4) {
            echo "Lo siento, esa no es la combinación. Te quedan " . (4 - $_SESSION['intentos']) . " intentos.";
        } else {
            echo "Lo siento, has agotado todos los intentos.";
            session_destroy(); // Terminar la sesión
        }
    }
}
?>

<form method="POST">
    Introduce la combinación: <input type="text" name="combinacion">
    <input type="submit" value="Abrir">
</form>
