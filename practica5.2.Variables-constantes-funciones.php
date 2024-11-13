<?php
/**
 * 1.VARIABLES. Crea tres variables, una de tipo entero, otra de tipo string 
 * (cadena de carácteres o texto ) y otra un número decimal (float), muéstralo 
 * en pantalla usando el print
 */

    print "<h2> Ejercicio 1. Variables y tipos </h2>";
    $numero1 = 487;
    print "<p> Muestra el tipo de la variable numero1 y su valor: ".var_dump($numero1)."</p>";
    $numero2 = 21.57;
    print "<p> Muestra el tipo de la variable numero2 y su valor: ".var_dump($numero2)."</p>";
    $frase="Hola mundo";
    print "<p> Muestra el tipo de la variable frase y su valor: ".var_dump($frase)."</p>";
    $verdadero = true;
    print "<p> Muestra el tipo de la variable verdadero y su valor: ".var_dump($verdadero)."</p>";
    $falso = false;
    print "<p> Muestra el tipo de la variable falso y su valor: ".var_dump($falso)."</p>";

/**
 * 2.CONSTANTES. Utiliza la constante (const IVA=0.21) 
 * y calcula el iva de un producto (crea la variable producto y dale un valor)
 */
    print "<h2> Ejercicio 2. Utiliza constantes para calcular el iva de un producto </h2>";
    const iva=0.21;
    $precio=100;
    $precioiva= $precio * iva;
    $preciofinal = $precioiva + $precio;

    print "<p> Este es el precio del producto $precio </p>";
    print "<p> Este es el precio del producto multiplicado por el iva $precioiva </p>";
    print "<p> Este es el precio final del producto $preciofinal </p>";

/**
 * 3.CONSTANTES. Utiliza la constante (const IVA=0.21) 
 * y calcula el iva de un producto (crea la variable producto y dale un valor)
 */
    print "<h2> Ejercicio 3. Array que contiene una lista de nombres </h2>";

    $listanombres=["maria","juan","pedro"];
    print $listanombres[0]."<br>";
    print $listanombres[1]."<br>";
    print $listanombres[2]."<br>";

/**
 * 4.Operaciones aritméticas
 */
    print "<h2> Ejercicio 4. Prueba todas las operaciones aritméticas que se pueden llevar a cabo </h2>";

    $a=4;
    $b=2;
    print "Números ingresados: A = $a, B = $b\n\n";

    // Suma
    $suma = $a + $b;
    print "Suma (A + B) = $suma <br>";

    // Resta
    $resta = $a - $b;
    print "Resta (A - B) = $resta <br>";

    // Multiplicación
    $multiplicacion = $a * $b;
    print "Multiplicación (A * B) = $multiplicacion <br>";

    // División
    if ($b != 0) {
        $division = $a / $b;
        print "División (A / B) = $division <br>";
    } else {
        print "División (A / B) = Error: No se puede dividir por cero <br>";
    }

    // Módulo (Resto de la división)
    if ($b != 0) {
        $modulo = $a % $b;
        print "Módulo (A % B) = $modulo<br>";
    } else {
        print "Módulo (A % B) = Error: No se puede calcular el módulo con divisor cero<br>";
    }

    //  (A^B)
    $potencia = pow($a, $b);
    print "Potencia (A ^ B) = $potencia <br>";

    // Raíz cuadrada de A y B
    if ($a >= 0) {
        print "Raíz cuadrada de A = " . sqrt($a) . "<br>";
    } else {
        print "Raíz cuadrada de A = Error: No se puede calcular la raíz cuadrada de un número negativo <br>";
    }

    if ($b >= 0) {
        print "Raíz cuadrada de B = " . sqrt($b) . "<br>";
    } else {
        print "Raíz cuadrada de B = Error: No se puede calcular la raíz cuadrada de un número negativo <br>";
    }

 /**
 * 5.Operadores lógicos
 */
    print "<h2> Ejercicio 5. Comprueba los operadores lógicos </h2>";
    print "Comprobamos si los números son iguales - si es verdadero devuelve 1, sino no devuelve nada";
    print(4==4);
    print "Comprobamos si los números son diferentes";
    print(4!==7);
    print "Comprobamos si el primer número es menor que el segundo";
    print(4<6);

/**
 * 6.Convertir pesetas a euros
 */
    print "<h2> Ejercicio 6. Convertir pesetas a euros </h2>";
    $pesetas = 1000; // cantidad en pesetas
    $conversion = 166.386;
    $euros = $pesetas / $conversion;
    print "$pesetas pesetas son equivalentes a $euros euros.<br>";

/**
 * 7.Calcular el volumen de un cubo
 */
    print "<h2> Ejercicio 7. Calcular el volumen de un cubo </h2>";
    $lado = 5; // longitud del lado del cubo
    $volumen = $lado * $lado * $lado;
    print "El volumen de un cubo de lado $lado es: $volumen <br>";

 /**
 * 8.Calcular la nota media de tres exámenes
 */
    print "<h2> Ejercicio 8. Calcular la nota media de tres exámenes </h2>";
    $nota1 = 8.5;
    $nota2 = 7.2;
    $nota3 = 9.0;

    $nota_media = ($nota1 + $nota2 + $nota3) / 3;
    print "La nota media de los tres exámenes es: $nota_media <br>";

/**
* 11. Existen funciones predefinidas pruebalas
*/
    print "<h2> Ejercicio 11. Funciones: random, minimo y máximo </h2>";
    print "Nos muestra un número random entre 3 y 9=".rand(3,9)."<br>";
    print "<br>";
    print "Nos muestra el mínimo entre 3 y 9=".min(3,9)."<br>";
    print "<br>";
    print "Nos muestra el máximo entre 3 y 9=".max(3,9)."<br>";
    print "<br>";

?>
