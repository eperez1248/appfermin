<?php

include 'includes/cabecera.php';
include 'includes/clases.php';   


$md = new fitexto("datos/datos.txt");
$usuarios = new fitexto("datos/prueba.txt");
$marray = $md->leerfichero();

echo "Hola gerente ".$_SESSION['usuario'];  

$arrayusu = $usuarios->leerfichero();
foreach($arrayusu as $datusu){
    $salida = explode (" ",$datusu);
    echo "<p>$salida[0]</p>";
}



/*foreach ($marray as $mivalor) {
    
    echo "<p>".$mivalor."</p>";   
}
echo " <a href='logout.php'> Salir del sistema </a>";*/