<?php
include 'cabecera.php';
$imprime= $_SESSION['usuario'];

echo "<p>hola soy el sistema, si, el sistema de escucha</p>";
echo " <p>la primera variable de sesion ".$imprime."</p>";
?>
<a href="logout.php"> salida del sistema</a>

