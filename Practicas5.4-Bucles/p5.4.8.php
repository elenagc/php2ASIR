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
          Muestra la tabla de multiplicar de un número introducido por teclado. El resultado se debe mostrar en una tabla 
        </h2>
        <h2>
          <br>Bucles
        </h2>
      </div>

      <div id="content">
        Por favor, introduzca un número del 0 al 10:
        <form action="p5.4.8.php" method="post">
          <input type="number" name="n" min="0" max="10"><br>
          <input type="submit" value="Aceptar">
        </form>


        <table>
          <?php
            $n = $_POST['n'];
            
            echo "Tabla del $n<br><br>";
            for ($i = 0; $i < 11; $i++) {
              echo "<tr><td>$n x $i = ".$n*$i."</tr></td>";
            }
          ?>
        </table>
        <br><br>
        
      </div>
      
    
    </div>
  </body>
</html>