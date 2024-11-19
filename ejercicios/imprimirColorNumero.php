<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action="" method="post">
        <label for="color">Seleccionar un Color:</label>
        <select name="color" id="color">
            <option value="">Color</option>
            <option value="rojo">Rojo</option>
            <option value="verde">Verde</option>
            <option value="azul">Azul</option>
            <option value="amarillo">Amarillo</option>
            <option value="negro">Negro</option>
            <option value="blanco">Blanco</option>
        </select>
        <br>
        <label for="numero">Ingresa un número:</label>
        <input type="number" name="numero" id="numero" min="1" max="99">
        <br>
        <input type="submit" value="Juntar">
    </form>
</body>
<?php

// Obtener el color seleccionado
if (isset($_POST["color"])) 
{
    $color_seleccionado = $_POST["color"];
} else {
    $color_seleccionado = "";
}

// Obtener el número seleccionado
if (isset($_POST["numero"])) 
{
    $numero_seleccionado = $_POST["numero"];
} else {
    $numero_seleccionado = "";
}

// Juntar las listas
if ($color_seleccionado != "" && $numero_seleccionado != "") {
    echo "<h3>Lista juntada</h3>";
    echo "$color_seleccionado:$numero_seleccionado";
}

?>
</html>