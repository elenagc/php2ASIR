<?php

// ---- CONSTANTES ----//
const pi=3.1416;

print "Nos muestra la constante que hemos definido";
print "<br>";
print pi;
print "<br>";

// Si queremos usar la constante para realizar operaciones solo tendremos que acceder a pi
// El perimetro de un circulo se calcula con la siguiente fórmula C= 2*pi*radioCirculo
$radiocirculo = 5;
$perimetro=2*pi*$radiocirculo;
print "Este es el perimetro de un circulo con radio 5, se ha usado la constante creada const pi=3.1416";
print "<br>";
print $perimetro." cm";
print "<br>";

// ---- ARRAYS  ----//
    print "Uso de arrays";
    print "<br>";
    $listanumeros= [1,2,3,4,5,6,7,8];
    print "la tercera posición $listanumeros[3] <br>";
    $estudiantes=["marta","juan","marcos"];
    print "El primer estudiante es $estudiantes[0] <br>";
    print "El tercer estudiante es $estudiantes[2] <br>";
    print var_dump($estudiantes);

?>