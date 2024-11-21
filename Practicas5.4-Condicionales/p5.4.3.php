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
            Programa en que dado un número del 1 a 7 escriba el correspondiente nombre del día de la semana.
        </h2>
        <h2>
          <br>Sentencia condicional
        </h2>
      </div>

      <div id="content">
      <?php
          $n = $_POST['n'];

          switch($n) {
            case 1:
              $dia  = "lunes";
              break;
            case 2:
              $dia  = "martes";
              break;
            case 3:
              $dia  = "miércoles";
              break;
            case 4:
              $dia  = "jueves";
              break;
            case 5:
              $dia  = "viernes";
              break;
            case 6:
              $dia  = "sábado";
              break;
            case 7:
              $dia  = "domingo";
              break;
            default:
              $dia  = "Debe introducir un número del 1 al 7";
          }

          print $dia;
        ?> 



      </div>

      
    </div>
  </body>
</html>