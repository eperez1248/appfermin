<?php

include_once 'includes/clases.php';

if (!isset($_REQUEST['usuario'])) {
    header('Location: index.php?error=1');
}
$usuario = $_REQUEST['usuario'];
$pass = $_REQUEST['pass'];
$pasa = new entra($usuario, $pass);

if ($pasa->autoriza()) {
    session_start();
    $_SESSION['perfil'] = $pasa->getperfil();
    $_SESSION['usuario'] = $usuario;
    header("Location:perfil.php");
} else {
    header('Location: index.php?error=1');
}

    
