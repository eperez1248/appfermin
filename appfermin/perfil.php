<?php
include 'includes/cabecera.php';
include 'includes/clases.php';


$misusuarios = new fitexto("datos/prueba.txt");

if ($misusuarios->perfil($_SESSION['usuario'])=='1'){
     header('Location: clientes.php');
    
    
}
if ($misusuarios->perfil($_SESSION['usuario'])=='2'){
     header('Location: gerente.php');
       
}
