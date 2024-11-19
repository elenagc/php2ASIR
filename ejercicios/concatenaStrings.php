<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action="" method="post">
        <label for="string1">String 1:</label>
        <input type="text" name="string1" id="string1">
        <label for="string2">String 2:</label>
        <input type="text" name="string2" id="string2">
        <input type="submit" value="Concatenar">
    </form>
</body>
<?php

if (isset($_POST["string1"])) {
    $string1 = $_POST["string1"];
    $string2 = $_POST["string2"];

    // Concatenar los strings
    $string_concatenado = $string1 . $string2;

    echo "String 1: $string1";
    echo "<br>";
    echo "String 2: $string2";
    echo "<br>";
    echo "String concatenado: $string_concatenado";
}

?>
</html>