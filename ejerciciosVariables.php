<?php 

/**
 *  1.Imprime tu nombre, edad y ciudad
 *  (todos los valores estarán guardados en una variable)
*/

print "<h1>----EJERCICIO 1----</h1>";
$nombre = "Juan";
$edad = 25;
$ciudad = "Madrid";

print "<h2> Hola, mi nombre es $nombre, tengo $edad años y vivo en $ciudad.</h2>";

/**
 *  2. Cambiar Valores de Variables
 *  
*/

print "<h1>----EJERCICIO 2----</h1>";

$nombre = "Ana";
$colorFavorito = "azul";
$edad = 20;

print "<h2> Nombre: $nombre, Color favorito: $colorFavorito, Edad: $edad </h2>";

// Cambiando valores
$nombre = "Carlos";
$colorFavorito = "verde";
$edad = 25;

print "<h2> Nombre: $nombre, Color favorito: $colorFavorito, Edad: $edad </h2>";

print "<h1>----EJERCICIO 3----</h1>";

$edadActual = 30;

print "<h2> Edad actual: $edadActual años </h2>";
print "<h2> Edad en 5 años: " . ($edadActual + 5) . "</h2>";
print "<h2> Edad en 10 años: " . ($edadActual + 10) . "</h2>";
print "<h2> Edad en 15 años: " . ($edadActual + 15) . "</h2>";

print "<h1>----EJERCICIO 4----</h1>";

$salario = 1000;
$incremento = 0.05;

print "<h2> Salario inicial: $salario </h2>";

// Año 1
$salario = $salario * (1 + $incremento);
print "<h2> Salario después de 1 año: $salario </h2>";

// Año 2
$salario = $salario * (1 + $incremento);
print "<h2> Salario después de 2 años: $salario </h2>";

// Año 3
$salario = $salario * (1 + $incremento);
print "<h2> Salario después de 3 años: $salario </h2>";
