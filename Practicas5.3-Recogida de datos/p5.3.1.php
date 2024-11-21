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
        Realiza un programa que pida dos números y luego muestre el resultado de su multiplicación.
        </h2>

        <h3>
          <br>Práctica 5.3.1 Recogida de datos
        </h3>
      </div>

      <div id="content">
        Por favor, introduzca dos números: <br>
        <form action="p5.3.1.php" method="post">
          x <input type="number" name="x"><br>
          y <input type="number" name="y"><br>
          <input type="submit" value="Multiplica">
        </form>
       
        <?php

         $x=$_POST['x'];
         $y=$_POST['y'];
          
        if (( $x != null)&&( $y != null))
        {
         //En este if compruebo que los números no estén vacios (null)
         //Si se cumple ejecuto las líneas de código que hay dentro
         // OR -> ||
         // AND -> &&
         // != Distinto  
         // <  > 
         // == igual
         echo "El resultado es:".$x, " * ", $y, " = ", $x * $y;
        }

        ?>
    
	   </div>
	
    </div>
  </body>
</html>