
<?php

print "<h2> Ejercicio 1 - variables </h2>";
$a = 5;
$b = 10;
$temp = $a;
$a = $b;
$b = $temp;
print "a = $a, b = $b <br>";

print "<h2> Ejercicio 2 - variables </h2>";
$base = 5;
$altura = 10;
$area = $base * $altura;
$perimetro = 2 * ($base + $altura);
print "Área: $area, Perímetro: $perimetro";


print "<h2> Ejercicio 3 - Condicionales </h2>";
$numero = 7;
if ($numero % 2 == 0) {
    print "Es par.";
} else {
    print "Es impar.";
}

print "<h2> Ejercicio 4 - Condicionales </h2>";
$a = 15;
$b = 20;
if ($a > $b) {
    print "$a es mayor.";
} else {
    print "$b es mayor.";
}

print "<h2> Ejercicio 5 - Condicionales </h2>";
$num = 15;
if ($num >= 10 && $num <= 20) {
    print "Está en el rango.";
} else {
    print "Fuera de rango.";
}

print "<h2> Ejercicio 6 - Condicionales </h2>";
$color = "rojo";
if ($color == "rojo") {
    print "Es rojo.";
} else {
    print "No es rojo.";
}

print "<h2> Ejercicio 7 - Condicionales </h2>";
$hora = 14;
if ($hora < 12) {
    print "Buenos días.";
} elseif ($hora < 18) {
    print "Buenas tardes.";
} else {
    print "Buenas noches.";
}

print "<h2> Ejercicio 8 - Condicionales </h2>";
$esActivo = false;
if (!$esActivo) {
    print "La cuenta está inactiva.";
}

print "<h2> Ejercicio 9 - Bucles </h2>";
$i = 1;
while ($i <= 10) {
    print $i . " ";
    $i=$i+1;
}

print "<h2> Ejercicio 10 - Bucles </h2>";
$i = 1;
$suma = 0;
while ($i <= 10) {
    $suma = $suma + $i;
    $i=$i+1;
}
print "La suma es: $suma <br>";


print "<h2> Ejercicio 11 - Bucles </h2>";
$i = 1;
print "Quiero que se imprima el parrafo 10 veces";
while ($i <= 10) {
   // print "Número $i <br>";
    print '<p style="color: red;"> Parrafo </p>';
    $i=$i+1;
}

?>