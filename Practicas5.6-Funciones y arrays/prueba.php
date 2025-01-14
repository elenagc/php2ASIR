<?php

   include('restar.php');

   function sumar($a,$b)
   {
 
     print $a+$b;      

   }

   print "Llamo a la función sumar".sumar(3,4).'<br>';
   print "Llamo a la función restar".restar(5,4).'<br>';

    $frutas = ['naranja','melon','limon','platano'];
    print $frutas;
    print $frutas[0];

    for($i=0;$i > 0; $i--)
    {
        print $i."<br>";

    }

    foreach($frutas as $valor)
    {
        print $valor.'</br>';

    }

    $comidas =[
        'desayuno' => 'cafe con leche',
        'comida'  => 'atun con tomate',
        'cena' => 'ensalada'
    ];

    print $comidas;
    print $comidas['desayuno'];

  

    foreach($comidas as $indice => $valor)
    {
        print 'para el índice'.$indice.'El valor es'.$valor.'</br>';

    }
  
    <?php 

    function restar($a,$b)
    {
       return $a-$b;

    }

 ?>   
 