<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action="" method="post">
        <label for="pais">País:</label>
        <select name="pais" id="pais">
            <option value="">Seleccione un país</option>
            <option value="peru">Perú</option>
            <option value="argentina">Argentina</option>
            <option value="brasil">Brasil</option>
            <option value="chile">Chile</option>
            <option value="colombia">Colombia</option>
            <option value="ecuador">Ecuador</option>
            <option value="mexico">México</option>
            <option value="venezuela">Venezuela</option>
        </select>
        <input type="submit" value="Calcular">
    </form>
</body>
<?php

// Obtener el país seleccionado
if (isset($_POST["pais"])) 
{
    $pais_seleccionado = $_POST["pais"];
} else {
    $pais_seleccionado = "";
}

// Imprimir el país seleccionado
if ($pais_seleccionado != "") {
    echo "El país seleccionado es: $pais_seleccionado";
} else {
    echo "No se ha seleccionado ningún país";
}

?>
</html>