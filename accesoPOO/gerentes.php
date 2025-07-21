<?php
include 'includes/cabecera.php';

if ($_SESSION['perfil']!='2'){ // si el perfil no es el de gerente vuelve al index
    header('Location: index.php');
}

echo " Hola ".$_SESSION['usuario'];

echo " se que eres gerente, he visto tu usuario y tu pass";

echo "<a href=logout.php> Salida del sistema </a>";

