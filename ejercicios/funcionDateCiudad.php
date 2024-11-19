<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action="" method="post">
        <select name="zona_horaria">
            <option value="America/Lima">Lima, Perú</option>
            <option value="America/New_York">Nueva York, Estados Unidos</option>
            <option value="Europe/London">Londres, Reino Unido</option>
            <option value="America/Mexico_City">Ciudad de México, México</option>
            <option value="Asia/Tokyo">Tokio, Japón</option>
            <option value="Africa/Cairo">El Cairo, Egipto</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
<?php

if (isset($_POST["zona_horaria"])) {
    $zona_horaria = $_POST["zona_horaria"];

    if (!in_array($zona_horaria, timezone_identifiers_list())) {
        echo "La zona horaria seleccionada no es válida.";
        exit;
    }


date_default_timezone_set($zona_horaria);

$fecha = date("d-m-Y");
$hora = date("H:i:s");

echo "<br>Hora de $zona_horaria <br>";
echo "La fecha actual es: $fecha <br>";
echo "La hora actual es: $hora";

}
?>
</html>