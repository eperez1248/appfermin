<?php
include 'includes/cabecera.php';

$perfil=$_SESSION['perfil'];

if ($perfil=='1'){
   header('Location: per1.php');       
}



if ($perfil=='2'){
   header('Location: per2.php');
}

?>
<a href="logout.php"> salida del sistema</a>

