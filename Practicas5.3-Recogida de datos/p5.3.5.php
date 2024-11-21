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
        Escribe un programa que calcule el área de un triángulo.
        </h2>

        <h3>
          <br>Práctica 5.3.5. Recogida de datos
        </h3>
      </div>

      <div id="content">
        Por favor, introduzca el alto y el ancho: <br>
        <form action="p5.3.5.php" method="post">
          alto <input type="number" name="alto"><br>
          ancho <input type="number" name="ancho"><br>
          <input type="submit" value="Calcula el área del rectángulo">
        </form>
       
        <?php
          
        
          $alto = $_POST['alto'];
          $ancho = $_POST['ancho'];
          
          if (($alto != null)&&( $ancho != null))
          {
            print "El área del triángulo es ";
            print $ancho*$alto/2 . " cm<sup>2</sup>";
             //round(($ancho*$alto/2) / 2, $precision = 2);
          }
          
        ?>
    
	   </div>
	
    </div>
  </body>
</html>