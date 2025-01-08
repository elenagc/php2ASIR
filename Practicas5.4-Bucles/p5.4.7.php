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
        Realiza el control de acceso a una caja fuerte. La combinación será un número de 4 cifras.
         El programa nos pedirá la combinación para abrirla. Si no acertamos, se nos mostrará el mensaje
         “Lo siento, esa no es la combinación” y si acertamos se nos dirá “La caja fuerte se ha abierto 
          satisfactoriamente”. Tendremos cuatro oportunidades para abrir la caja fuerte. 

        </h2>
        <h2>
          <br>Bucles
        </h2>
      </div>

      <div id="content">

        <?php
          if (!isset($_POST['oportunidades'])) {
            $numeroIntroducido = 55555;
            $oportunidades = 4;
          } else {
            $oportunidades = $_POST['oportunidades'];
            $numeroIntroducido = $_POST['numeroIntroducido'];
          }

          $numeroSecreto = 2405;

          if ($numeroIntroducido == $numeroSecreto) {
            echo "La caja fuerte se ha abierto.";
          } else if ($oportunidades == 0) {
            echo "Lo siento, has agotado todas tus oportunidades. La caja fuerte permanecerá cerrada.";
          } else {
            echo "Te quedan ", $oportunidades, " oportunidades para abrir la caja fuerte.<br>";
            $oportunidades--;
            echo "Introduce un número de cuatro cifras.";
            echo '<form action="p5.4.7.php" method="post">';
            echo '<input type="number" min=0 max=9999 name="numeroIntroducido" autofocus>';
            echo '<input type="hidden" name="oportunidades" value="', $oportunidades, '">';
            echo '<input type="submit" value="Continuar">';
            echo '</form>';
          }
        ?>
        <br><br>
      
      </div>
    </div>
  </body>
</html>