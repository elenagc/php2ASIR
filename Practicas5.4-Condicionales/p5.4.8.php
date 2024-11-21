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
          Realiza un programa que diga si un número introducido por teclado es par y/o divisible entre 5. 
        </h2>
        <h2>
          <br>3. Sentencia condicional
        </h2>
      </div>

      <div id="content">
        <?php
              $n = $_POST['n'];
              
              if (($n % 2) == 0) {
                echo "El número introducido es par";
              } else {
                echo "El número introducido es impar";
              }

              if (($n % 5) == 0) {
                echo " y divisible entre 5.";
              } else {
                echo " y no es divisible entre 5.";
              }
        ?>


      </div>

    </div>
  </body>
</html>