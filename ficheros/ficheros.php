<?php

include 'includes/clase.php';

$mifichero = new fitexto('tres.txt');
//$mifichero->buscar();
//$mifichero->crearfichero();

//$dato = $mifichero->leerfichero();
//var_dump($dato);
if ($mifichero->buscar("pepe","1234"))
        echo "estoy dentro";