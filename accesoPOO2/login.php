<?php

include 'includes/clases.php';

if (isset($_REQUEST['usuario'])) {
    $usuario = $_REQUEST['usuario'];
} else {
    $usuario = '';   
}

if (isset($_REQUEST['pass'])) {
    $pass = $_REQUEST['pass'];  
} else {
    $pass = ''; 
}

if ($usuario=='') {
    $errores = "?usuario=0";
} else {
    $errores = "?usuario=1";
}

if ($pass=='') {
    $errores = $errores."&pass=0";
} else {
    $errores = $errores."&pass=1";
}


$mif = new fitexto("datos/prueba.txt");

if ($mif->buscar($usuario, $pass)) {
    session_start();
    $_SESSION['usuario']=$usuario;
    header('Location: perfil.php');
} else {


    header('Location: index.php' . $errores);
}

    
