<?php

include 'includes/cabecera.php';
include 'includes/clases.php';
use Dom\Dompdf;
$mipdf = new Dompdf();

$md = new fitexto("datos/datos.txt");
$usuarios = new fitexto("datos/prueba.txt");
$marray = $md->leerfichero();

echo "Hola gerente " . $_SESSION['usuario'];

$arrayusu = $usuarios->leerfichero();
foreach ($arrayusu as $datusu) {
    $salida = explode(" ", $datusu);
    if ($salida[2] == '1') {
        echo "<p>Las compras de $salida[0] son:</p>";
        $sal = $md->datosusuario($salida[0]);
        foreach ($sal as $dat)
            echo "<p>$dat</p>";
    }
}



/*foreach ($marray as $mivalor) {
    
    echo "<p>".$mivalor."</p>";   
}
echo " <a href='logout.php'> Salir del sistema </a>";*/