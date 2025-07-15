<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Acceso a la peluqueria Manoli</title>

    </head>
    <body>

        <header>
            <h1 style="color:green">Acceso a la peluqueria Manoli</h1>
        </header>

        <form method="post" action="login.php">
            <p> Usuario:
                <input type="text" name="usuario">
            </p>
            <p>Password:
                <input type="text" name="pass">
            </p>
            <p>
                <input type="submit" value="Entrar">
            </p>
        </form>
        <?php
        if (isset($_GET['error'])) {
            echo 'Credenciales incorrectas';
        }
        ?>
    </body>
</html>