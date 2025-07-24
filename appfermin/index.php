<?php
if (isset($_GET['usuario'])) {
    $usuario = $_GET['usuario'];
    if ($usuario == '0') {
        echo "<p>Es obligatorio cumplimentar los datos de usuario</p>";
    }
}
if (isset($_GET['pass'])) {
    $pass = $_GET['pass'];
    if ($pass == '0') {
        echo "<p>Es obligatorio cumplimentar los datos de password</p>";
    }
}
if ((isset($_GET['pass'])) && (isset($_GET['usuario']))) {
    if (($_GET['usuario'] == '1') && ($_GET['pass'] == '1')) {
        echo "<p>Error de credenciales</p>";
    }
}
?>
<html>
    <head>
    </head>
    <body>
        <header>
            <P> Sistema Asun tipo cion</P> 
        </header>
        <section>
            <form method="POST" action="login.php"> 
                <p> Usuario :<input type="text"  name="usuario" ></p>
                <p> Password :<input type="text"  name="pass" ></p>
                <p><input type="submit" value="Enviar"></p>
            </form>
        </section>
    </body>
</html>



