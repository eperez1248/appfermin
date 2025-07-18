<?php

include 'includes/clase.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    function validar_requerido(string $texto) {
        $salida = true;
        if (trim($texto) == '') {
            $salida = false;
        }
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

    /* $usuarios[] = [['0', 'pepe', '123', '1'], ['1', 'ana', '456', '2'], ['2', 'manolo', '678', '1'], ['3', 'juan', '890', '1']];
      foreach ($usuarios as $usu)
      foreach ($usu as $dato) {
      if (($usuario == $dato[1])&&($pass ==$dato[2])) {
      session_start();
      $_SESSION['id'] = $dato[0];
      $_SESSION['nombre'] = $dato[1];
      $_SESSION['perfil'] = $dato[3];
      header('Location: sistema.php');
      }
      } */
    $mifichero = new fitexto("tres.txt");
    
    if ($mifichero->buscar($usuario, $pass)) {
        session_start();
        $_SESSION['nombre'] = $usuario;
        $_SESSION['perfil'] = $mifichero->perfil($usuario,$pass);
        header('Location:sistema.php');
    }
    
    if (!(isset($_SESSION['nombre'])))
        header('Location: index.php' . $errores);
}
?>

