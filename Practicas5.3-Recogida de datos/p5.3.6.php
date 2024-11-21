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
        Escribe un programa que calcule el total de una factura a partir de la base imponible.

        </h2>

        <h3>
          <br>Práctica 5.3.6. Recogida de datos
        </h3>
      </div>

      <div id="content">
        Por favor, introduzca la base imponible: <br>
        <form action="p5.3.6.php" method="post">
          Base Imponible <input type="number" name="baseImponible"><br>
          <input type="submit" value="Calcula el área del rectángulo">
        </form>
       
        <?php
          
        
          $baseImponible = $_POST['baseImponible'];
          
          if ($baseImponible != null)
          {

            print "El total de la factura es ";
            print $baseImponible * 1.21." euros.";
           
          }
          
        ?>
    
	   </div>
	
    </div>
  </body>
</html>