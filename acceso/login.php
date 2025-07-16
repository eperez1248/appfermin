<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    function validar_requerido(string $texto) {
        $salida = true;
        if (trim($texto) == '')
        {$salida = false;}
        return $salida;
    }

    if (isset($_REQUEST['usuario'])) {
        $usuario = trim($_REQUEST['usuario']);
    } else {
        $usuario = '';
    }

    if (isset($_REQUEST['pass'])) {
        $pass = trim($_REQUEST['pass']);
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

    $usuariog = 'pepe';
    $passg = '123';

    if (($usuario == $usuariog) && ($pass == $passg)) {
        session_start();
        $_SESSION['usuario'] = $usuario;

        header('Location: sistema.php');
        die();
    } else {
        
        
        header('Location: index.php' . $errores);
    }
}
?>

