<!DOCTYPE html>
<?php
if (isset($_REQUEST['error'])) {
    echo 'Tus credenciales no son correctas';
}
?>
<html>
    <?php
    include_once 'cabecera.php';
    ?>
    <body>
        <h2><p>Bienvenido a LIBRERIA FERMIN</p></h2>
        <form method="POST" action="login.php">
            <fieldset>
                <legend>ACCESO AL SISTEMA DE LIBRERIA DE FERMÍN</legend>
                <p id="tip" class="tip"></p>
                <p> Usuario :<input type="text"  name="usuario" onfocus="TextoAyuda(0)" title="Usuario"/></p>
                <p onclick="pass()"> Password :<input type="password"  name="pass" onfocus="TextoAyuda(1)" title="Password"/></p> 
                <p><input type="submit" value="Enviar"/></p>
            </fieldset>
        </form>
        <?php
        include_once 'pie.php';
        ?>
    </body>
</html>
