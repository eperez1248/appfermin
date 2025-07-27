<head>
    <meta charset="UTF-8">
    <title>Libreria Fermin</title>
    <link rel="stylesheet" href="css/libre.css"/>
    <script src="js/libre.js"></script>
</head>

<fieldset>
    <table><tr><td>
                <img src="media/libros.png" width="100" height="100" alt="imagen de libreria fermin"/></td></tr>
        <h2><p></p></h2>
    
    </table>
</fieldset>

<?php
session_start();
if (!(isset($_SESSION['usuario']))) {
    header('Location: index.php');
    die();
}
include_once 'includes/clases.php';
include_once './vendor/autoload.php';
echo '"<h5>Hola '. $_SESSION['usuario']."</h5>";
?>

