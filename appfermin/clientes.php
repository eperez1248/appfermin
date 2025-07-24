<?php

include 'includes/cabecera.php';
include 'includes/clases.php';   


$misdatos = new fitexto("datos/datos.txt");

$miarray=$misdatos->datosusuario($_SESSION['usuario']);

foreach ($miarray as $value) {
    
    echo "<p>".$value."</p>";   
}
echo " <a href='logout.php'> Salir del sistema </a>";