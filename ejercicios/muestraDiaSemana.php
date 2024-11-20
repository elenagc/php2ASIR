<?php
$dia_ingles = date('D');
if ( $dia_ingles == 'Mon' ) {
    echo 'Lunes';
} else if ( $dia_ingles == 'Tue' ) {
   echo 'Martes';
} else if ( $dia_ingles == 'Wed' ) {
   echo 'Miércoles';
} else if ( $dia_ingles == 'Thu' ) {
   echo 'Jueves';
} else if ( $dia_ingles == 'Fri' ) {
   echo 'Viernes';
} else if ( $dia_ingles == 'Sat' ) {
   echo 'Sábado';
} else { //por descarte es domingo
   echo 'Domingo';
}
?>