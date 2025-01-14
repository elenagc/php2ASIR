<?php

include('restar.php');

function sumar($numero1, $numero2)
{
    $resultado= $numero1 + $numero2;
    return $resultado;

}

print sumar(3,5);
print "<br>";
print restar(3,2);

$frutas = ["naranjas","limones","platanos"];
print $frutas[1];

foreach ($frutas as $valor)
{
    print $valor."<br>";
}

$comidas = 
[
    "desayuno" => "cafe con leche",
    "almuerzo" => "pasta",
    "cena" => "ensalada"

];

print $comidas['desayuno']."<br>";

foreach($comidas as $indice => $valor)
{
    print $indice."tiene el valor".$valor."<br>";

}

?>