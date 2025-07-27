<?php
include_once 'cabecera.php';

if ($_SESSION['perfil']=='1'){
     header('Location: inicio.php');
}
if ($_SESSION['perfil']=='2'){
     header('Location: iniciogestion.php');
       
}
