<html><body><?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            echo '<p> Ahora hay datos.</p>';
        }
        ?>
        <form method="post">
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