<?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $apodoBueno = 'bulma';
            $contrasenyaBuena = '123';
            $apodo = isset($_REQUEST['apodo']) ? $_REQUEST['apodo'] : null;
            $contrasenya = isset($_REQUEST['contrasenya']) ? $_REQUEST['contrasenya'] : null;
            if ($apodoBueno == $apodo && $contrasenyaBuena == $contrasenya) {
                session_start();
                $_SESSION['apodo'] = $_REQUEST['apodo'];
                header('Location: perfil.php');
                die();
            } else {
                header('Location:index.php?error=1');
            }
        }else{
            header('Location:index.php');
        }
        ?>
        