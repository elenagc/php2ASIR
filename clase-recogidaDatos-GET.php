<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
    <div id="container">
      <div id="header">
        <h2>
        Realiza un programa que pida dos números y luego muestre el resultado de su multiplicación.
        </h2>

        <h3> 
          <br>Recogida de datos - GET
        </h3>
      </div>

      <div id="content">
        Por favor, introduzca dos números: <br>
        <form action="clase-recogidaDatos-GET.php" method="get">
          x <input type="number" name="variable1"><br>
          y <input type="number" name="variable2"><br>
          <input type="submit" value="Multiplica">
        </form>
       
        <?php

         $x=$_GET['variable1'];
         $y=$_GET['variable2'];
  
         print "El resultado es:$x * $y =".$x * $y;
        

        ?>
    
	   </div>
	
    </div>
  </body>
</html>