<?php
session_start();
if (!isset($_SESSION['apodo'])) {
    header('Location: login.php');
    die();
}
?>
<html>
    <body>
        <h1>Bienvenido <?= $_SESSION['apodo'] ?></h1>
        <a href="logout.php">Cerrar sesión</a>
    </body>
</html>
