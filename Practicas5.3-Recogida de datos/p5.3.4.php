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
        Escribe un programa que calcule el área de un rectángulo.
        </h2>

        <h3>
          <br>Práctica 5.3.4. Recogida de datos
        </h3>
      </div>

      <div id="content">
        Por favor, introduzca el alto y el ancho: <br>
        <form action="p5.3.4.php" method="post">
          alto <input type="number" name="alto"><br>
          ancho <input type="number" name="ancho"><br>
          <input type="submit" value="Calcula área de un rectángulo">
        </form>
       
        <?php
          
        
          $alto = $_POST['alto'];
          $ancho = $_POST['ancho'];
          
          if (($alto != null)&&( $ancho != null))
          {
            print "El área del rectángulo es ";
            print $alto * $ancho." cm<sup>2</sup>";
          }
          
        ?>
    
	   </div>
	
    </div>
  </body>
</html>