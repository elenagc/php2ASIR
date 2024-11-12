<?php
//Esto es un comentario
/**
 * Esto es un comentario de varias lineas
 * 
 */
print "Hola mundo <br>";
echo "Hola mundo2 <br>";

print "<h1> Esto es un encabezado </h1>";
print "<p> esto es un parrafo </p>";

$visitas=0;
$nombre="Juan";
$decimal=2.45;
$booleano=true;

print "Esta es la variable visitas: $visitas <br>";
print "Esta es la variable nombre: $nombre <br>";

print "el tipo de la variable visitas <br>";
print var_dump($visitas)."<br>";
print "el tipo de la variable nombre".var_dump($nombre)."<br>";

$numero1=4;
$numero2=5;

print "numero1: $numero1 <br>";
print "numero2: $numero2 <br>";
$suma=$numero1+$numero2;
print "suma: $suma <br>";
$numero1++;
print "numero1: $numero1 <br>";
$numero1 = $numero1 + 1;
print "numero1: $numero1 <br>";

?>