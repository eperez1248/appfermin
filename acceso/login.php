<?php

$usuariog = 'pepe';
$passg = '123';
$usuario = $_REQUEST['usuario'];
$pass = $_REQUEST['pass'];

if ($usuario == $usuariog && $pass == $passg) {
    session_start();
    $_SESSION['usuario'] = $usuario;
    header('Location: sistema.php');
    die();
} else {
    header('Location:index.php?error=error');
}
?>
        
