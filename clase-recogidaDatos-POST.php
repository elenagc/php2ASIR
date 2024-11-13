<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
    <div id="container">
      <div id="header">
        <h2>
        Realiza un programa que pida nombre y apellidos y lo muestre por la pantalla - usando POST.
        </h2>

        <h3>
          <br>Recogida de datos - POST
        </h3>
      </div>

      <div id="content">
        Por favor, introduzca su nombre y apellido: <br>
        <form action="clase-recogidaDatos-POST.php" method="post">
          Nombre: <input type="text" name="nombreUsuario"><br>
          Apellido: <input type="text" name="apellidoUsuario"><br>
          <input type="submit" value="Muestra Datos">
        </form>
       
        <?php

         $nombre=$_POST["nombreUsuario"];
         $apellido=$_POST['apellidoUsuario'];
          
        
         print "Tu nombre es $nombre y el apellido $apellido";
        

        ?>
    
	   </div>
	
    </div>
  </body>
</html>