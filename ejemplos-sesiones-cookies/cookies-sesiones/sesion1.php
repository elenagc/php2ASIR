<?php
session_start();
if(isset($_SESSION['contador']))
{
        $_SESSION['contador'] = $_SESSION['contador'] + 1;
        $mensaje = 'Número de visitas: ' . $_SESSION['contador'];
}
else
{
        $_SESSION['contador'] = 1;
        $mensaje = 'Bienvenido a nuestra página web';
}
?>
<!DOCTYPE html>
<html lang="es">
        <head>
            <meta charset="utf-8" />
            <title>Prueba de sesión</title>
        </head>
<body>
<p>
<?php echo $mensaje; ?>
</p>
</body>
</html>

