<?php
          $hora = $_POST['hora'];

          if (($hora >= 6) && ($hora <= 12)) {
            echo "Buenos días";
          }

          if (($hora >= 13) && ($hora <= 20)) {
            echo "Buenas tardes";
          }

          if ((($hora >= 21) && ($hora < 24)) || (($hora <= 5) && ($hora >= 0))) {
            echo "Buenas noches";
          }

          if (($hora >= 24) || ($hora < 0)) {
            echo "La hora introducida no es correcta.";
          }
?>
     