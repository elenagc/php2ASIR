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
        Realiza un conversor de euros a pesetas. Ahora la cantidad en euros que se quiere convertir se deberá introducir por teclado.

        </h2>

        <h3>
          <br>Práctica 5.3.2. Recogida de datos
        </h3>
      </div>

      <div id="content">
        Por favor, introduzca los euros: <br>
        <form action="p5.3.2.php" method="post">
          euros <input type="number" name="euros"><br>
         
          <input type="submit" value="Multiplica">
        </form>
       
        <?php
          
          $euros= $_POST['euros'];
          echo $euros, " euros son ", round($euros * 166.386), " pesetas.";
        
          
        ?>
    
	   </div>
	
    </div>
  </body>
</html>