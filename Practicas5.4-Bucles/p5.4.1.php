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
          Muestra los números múltiplos de 5 de 0 a 100 utilizando un bucle for.
        </h2>
        <h2>
          <br>Bucles
        </h2>
      </div>

      <div id="content">
        <?php
          //$i=0 inicializo la variable 
          //$i < 100 condición repitiré el bucle hasta que $i sea igual a 100
          //$i=$i+5 Cada vez que pasa al for le suma 5 a la variable $i
          for($i = 0; $i < 100; $i=$i+5) {
           print "$i  ";
          }
        ?>
        <br><br>
      </div>
    
    </div>
  </body>
</html>