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
        Muestra los números múltiplos de 5 de 0 a 100 utilizando un bucle do-while. 

        </h2>
        <h2>
          <br>Bucles
        </h2>
      </div>

      <div id="content">
        <?php
          //$i=0 inicializo la variable 
          //$i < 100 condición, repitiré el bucle mientras $i sea menor que 100
          //$i=$i+5 Cada vez que se ejecuta las intruscciones que hay dentro del while le suma 5 a la variable $i
          //En este caso compruebo la condición al final, es decir, aunque no se cumpla la condición, mínimo se ejecuta
          //el bucle una vez (se ejecutan las instrucciones que hay dentro de do{ instrucciones; }while())
          $i = 0;
          do {
              print "$i  ";
              $i= $i + 5;
          } while($i < 100);
        ?>
        <br><br>
      </div>
    
    </div>
  </body>
</html>