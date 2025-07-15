<html><body>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if (isset($_REQUEST['error'])){
                echo '<p style="color:red">El apodo o contraseña son incorrectos.</p>';
            }
        }
        ?>
        <form method="post" action="login.php">
            <p> Nombre
                <input type="text" name="apodo" placebolder="Apodo">
            </p>
            <p>Contraseña
                <input type="password" name="contrasenya" placebolder="Contraseña">
            </p>
            <p>
                <input type="submit" value="Entrar">
            </p>
        </form>
    </body>
</html>