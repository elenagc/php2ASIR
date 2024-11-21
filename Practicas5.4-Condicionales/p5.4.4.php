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
            Escribe un programa que calcule el salario semanal de un trabajador teniendo en cuenta que las horas ordinarias (40 primeras horas de trabajo) se pagan a 12 euros la hora. A partir de la hora 41, se pagan a 16 euros la hora. 
            <br>Sentencia condicional
        </h2>

      </div>

      <div id="content">
        <?php
          $horasTrabajadas  = $_POST['horasTrabajadas'];

          if ($horasTrabajadas  < 40) {
            $sueldoSemanal = 12 * $horasTrabajadas ;
          } else {
            $sueldoSemanal = (40 * 12) + (($horasTrabajadas  - 40) * 16);
          }

          print "El sueldo semanal que le corresponde es de $sueldoSemanal euros";
        ?>
        <br><br>
    
	    </div>
      
      
    </div>
    </html>
  </body>