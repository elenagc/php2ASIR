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
          Muestra los números del 320 al 160, contando de 20 en 20 utilizando un bucle while
        
        <h2>
          Bucles
        </h2>
      </div>

      <div id="content">
        <?php
          $i = 320;
          while($i > 159) {
            echo "$i  ";
            $i -= 20;
          }
        ?>
        <br><br>
        
      </div>
      
      
    </div>
  </body>
</html>