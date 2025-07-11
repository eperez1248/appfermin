<?php
$usuario = $_REQUEST['usuario'];
$pass = $_REQUEST['pass'];

if(($usuario=='pepe') &&($pass == '1234')){
    echo 'Estás dentro';
}else{
    echo 'Credenciales incorrectas';
}
//echo '<p>El usuario es ' . $usuario . '</p>';
//echo '<p>El pass es ' . $pass. '</p>';
