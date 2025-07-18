<?php
include 'includes/cabecera.php';

echo $_SESSION['id']." ".$_SESSION['nombre'];

echo "Eres un usuario  administrador";

?>

<p><a href="logout.php"> salida del sistema</a></p>