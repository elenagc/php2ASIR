<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link href="default.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <div id="container">
      <div id="header">
        
        <h2>
          Escribe un programa que nos diga el horóscopo a partir del día y el mes de nacimiento. 
        </h2>
      </div>

      <div id="content">
        <?php
        $mes = $_POST['mes'];  
        $dia = $_POST['dia'];

        if($mes == 1) {
            if ($dia < 21) {
              $horoscopo = "capricornio";
            } else {
              $horoscopo = "acuario";
            }
        }
            
         if($mes == 2){
            if ($dia < 20) {
              $horoscopo = "acuario";
            } else {
              $horoscopo = "piscis";
            }
           }
            
         if($mes == 3){
            if ($dia < 21) {
              $horoscopo = "piscis";
            } else {
              $horoscopo = "aries";
            }
         }
            
         if($mes == 4){
            if ($dia < 21) {
              $horoscopo = "aries";
            } else {
              $horoscopo = "tauro";
            }
            }
            
          if($mes == 5){
            if ($dia < 20) {
              $horoscopo = "tauro";
            } else {
              $horoscopo = "géminis";
            }
          }
            
          if($mes == 6){
            if ($dia < 22) {
              $horoscopo = "géminis";
            } else {
              $horoscopo = "cáncer";
            }
          }
            
          if($mes == 7){
            if ($dia < 22) {
              $horoscopo = "cáncer";
            } else {
              $horoscopo = "Leo";
            }
          }
            
           if($mes == 8){
            if ($dia < 24) {
              $horoscopo = "leo";
            } else {
              $horoscopo = "virgo";
            }
           }
            
         if($mes == 9){
            if ($dia < 23) {
              $horoscopo = "virgo";
            } else {
              $horoscopo = "libra";
            }
         }
            
         if($mes == 10){
            if ($dia < 23) {
              $horoscopo = "libra";
            } else {
              $horoscopo = "escorpio";
            }
         }
         if($mes == 11){
            if ($dia < 23) {
              $horoscopo = "escorpio";
            } else {
              $horoscopo = "sagitario";
            }
         }
            
         if($mes == 12){
            if ($dia < 21) {
              $horoscopo = "sagitario";
            } else {
              $horoscopo = "capricornio";
            }
            
        }

        print "Su horóscopo es : ". $horoscopo;
      ?>



      </div>
      

      
    </div>
  </body>
</html>