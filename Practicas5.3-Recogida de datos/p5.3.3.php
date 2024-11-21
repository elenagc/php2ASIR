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
        Escribe un programa que sume, reste, multiplique y divida dos números introducidos por teclado.
        </h2>

        <h3>
          <br>Práctica 5.3.3. Recogida de datos
        </h3>
      </div>

      <div id="content">
        Por favor, introduzca dos numeros: <br>
        <form action="p5.3.3.php" method="post">
          numero1 <input type="number" name="num1"><br>
          numero2 <input type="number" name="num2"><br>
          <input type="submit" value="Calcula suma, resta, multiplicación, división">
        </form>
       
        <?php
          
        
          $x = $_POST['num1'];
          $y = $_POST['num2'];

          if (($x != null)&&( $y != null))
          {
            print $x. " + ". $y. " = ". $x+$y. "<br>";
            print $x. " - ". $y. " = ". $x-$y. "<br>";
            print $x. " * ". $y. " = ". $x*$y. "<br>";
            print $x. " / ". $y. " = ". round($x/$y, $precision = 2);
          }
          
        ?>
    
	   </div>
	
    </div>
  </body>
</html>