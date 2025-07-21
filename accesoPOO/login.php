<?php

include 'includes/clases.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

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

    $errores = "";
    if (!validar_requerido($usuario)) {
        $errores = "?usuario=1";
    } else {
        $errores = "?usuario=0";
    }

    if (!validar_requerido($pass)) {
        $errores = $errores . "&pass=1";
    } else {
        $errores = $errores . "&pass=0";
    }

    $datos = new fitexto("datos/usuarios.txt");
    if ($datos->buscar($usuario, $pass)) {
        session_start();
        $_SESSION['usuario'] = $_REQUEST['usuario'];
        $_SESSION['perfil'] = $datos->perfil($usuario, $pass);
        header('Location: perfil.php');
        die();
    }

    if (!(isset($_SESSION['id'])))
        header('Location: index.php' . $errores);
} else {

    header('Location: index.php');
}
?>        
