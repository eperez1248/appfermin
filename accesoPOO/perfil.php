<?php
include 'includes/cabecera.php';

$perfil=$_SESSION['perfil'];

if ($perfil=='1'){
    
     header('Location: clientes.php');
        
}
if ($perfil=='2'){
    
     header('Location: gerentes.php');
    
}