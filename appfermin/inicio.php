<?php
include_once 'cabecera.php';

$usu = $_SESSION['usuario'];

$mifichero = new textoarray("datos\\".$usu.".txt");
$miarray= $mifichero->getarray();

$mitabla = new vertabla($miarray);
echo "<p>Hola $usu tus datos de venta son</p>";
echo $mitabla->sacalatabla();

echo "<p><a href= 'mipdf.php'>Imprimir en pdf</a></p>";

echo "<p><a href= 'salir.php'>Salir</a></p>";

include_once 'pie.php';
?>
