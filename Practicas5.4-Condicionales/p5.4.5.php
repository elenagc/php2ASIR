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
          Realiza un programa que calcule la media de tres notas. Amplía el programa anterior para que diga la nota del boletín (insuficiente, suficiente, bien, notable o sobresaliente). 
        </h2>
      <br>Sentencia condicional
  
      </div>

      <div id="content">
        
        <?php
        
        $media = ($_POST['nota1'] + $_POST['nota2'] + $_POST['nota3']) / 3;
        print "La nota media es ";
        print round($media, $precision = 2);
        print ", en el boletín tiene un ";
        
        if ($media < 5) {
          print "Insuficiente.";
        }
        
        if (($media >= 5) && ($media < 6)) {
          print  "Suficiente.";
        }
        
        if (($media >= 6) && ($media < 7)) {
          print  "Bien.";
        }
        
        if (($media >= 7) && ($media < 9)) {
          print  "Notable.";
        }
        
        if ($media >= 9) {
          print  "Sobresaliente.";
        }
      ?>

      </div>
     
      
    </div>
  </body>
</html>