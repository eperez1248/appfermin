<html>
    <head>
        <title>Acceso al sistema de peluqueria manoli</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

        <header>
            <h2 style="color:green"> Sistema de gestion  de manoli</h2>
        </header>        
        <form method="POST" action="login.php">
            <div>Usuario: <input type="text" name="usuario"></div>   
            <div>Password: <input type="text" name="pass"></div> 
            <div><input type="submit" value="entra"></div>
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if (isset($_GET['usuario'])) {
                if ($_GET['usuario'] == '1')
                    echo "<p> Falta introducir usuario</p>";
            }


            if (isset($_GET['pass'])) {
                if ($_GET['pass'] == '1')
                    echo "<p> Falta introducir pass</p>";
            }
            
            if ( (isset($_GET['pass']) && (isset($_GET['usuario']) ))){
            if (($_GET['pass'] == '0') && ($_GET['usuario'] == '0')) {

                echo "<p> Credenciales incorrectas</p>";
            }
        }
        }
        ?>
    </body>
</html>
