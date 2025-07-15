<?php

session_start();
$imprime = $_SESSION['usuario'];
echo "<p>Hola soy el sistema, si, el sistema te escucha</p>";
echo "<p>La primera variable de sesion es $imprime</p>";
