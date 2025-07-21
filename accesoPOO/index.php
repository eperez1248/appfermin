
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
<html>
    <head>
        <title>Sistema Damian</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/w3.css"/>
        <script src="js/js.js"></script>
    </head>
<body style="background: burlywood">
  
   <div align="center">
            <div class="w3-center w3-display-container w3-blue" style="height:200px; width: 400px;">
                <form method="post" action="login.php">
                <label>Usuario</label>
                <input class="w3-input" name="usuario" type="text" onfocus="TextoAyuda(0)">
                <label>Password</label>
                <input class="w3-input" name=pass type="password" onfocus="TextoAyuda(1)">           
                <p><button class="w3-button w3-black w3-round-xlarge">Enviar</button></p>    
                <br>
                <p id="help" name="help" style="color: red"> </p>
                </form>
            </div>
        </div>
    
    
    
    
    
    </body>
</html>
     