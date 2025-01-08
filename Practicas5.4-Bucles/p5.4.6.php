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
          Muestra los números del 320 al 160, contando de 20 en 20 utilizando un bucle do-while
        </h2>
        
        <h2>
          Bucles
        </h2>
        
      </div>

      <div id="content">
        <?php
          $i = 320;
          do {
              echo "$i  ";
              $i -= 20;
          } while($i > 159);
        ?>
        <br><br>
      </div>
      
    </div>
  </body>
</html>