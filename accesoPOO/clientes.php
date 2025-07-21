<?php
include 'includes/cabecera.php';
include 'includes/clases.php'; 

if ($_SESSION['perfil']!='1'){ // si el perfil no es el de cliente vuelve al index
    header('Location: index.php');
}

echo "<body style = 'background-color:green'>";
echo " Hola ".$_SESSION['usuario'];

$micompra = new fitexto("datos/".$_SESSION['usuario'].".txt");
$miarray=$micompra->leerfichero();

echo "<table border = '1'>";
echo "<tr><td> Unidades </td><td> Producto </td></tr>";

foreach ($miarray as $value) {
     $temporal = explode(" ", $value);
    
    echo "<tr><td>$temporal[0]</td><td>$temporal[1]</td></tr>";   
}

echo '</table>';
echo "<a href=logout.php> Salida del sistema </a>";
echo '</body>';