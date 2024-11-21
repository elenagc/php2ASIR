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
        Escribe un programa que pida por teclado un día de la semana y que diga qué asignatura toca a primera hora ese día. 
        </h2>
        
      </div>

      <div id="content">

                <form action="p5.4.1.php" method="post">
                <label for="dia">Selecciona el día de la semana</label>
                <select name="dia">
                    <option value="lunes"> lunes </option> 
                    <option value="martes"> martes </option> 
                    <option value="miercoles"> miercoles </option> 
                    <option value="jueves"> jueves </option> 
                    <option value="viernes"> viernes </option> 
                    <option value="sabado"> sabado </option> 
                </select>
                <br/>
                <button>Enviar</button>
            </form>
        <?php

          $dia = $_POST['dia'];

          if($dia == "lunes") {
              
             print "Empresas";
              
          }elseif ($dia == "martes")
          {
              print "ASO";
              
          }elseif ($dia == "miercoles")
          {
              print "SRI";
              
          }elseif ($dia == "jueves")
          {
              print "IAW";
              
          }elseif ($dia == "viernes")
          {
              print "SAD";
              
          }else{
              
              print "El día introducido es incorrecto";
          }
       
        ?>
        <br><br>
    
      </div>
 
    </div>
  </body>
</html>