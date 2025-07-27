<!DOCTYPE html>
<?php
  if (isset($_REQUEST['error'])){
      echo 'Tus credenciales no son correctas';
  }
        ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Libreria Fermin</title>
        <link rel="stylesheet" href="css/libre.css"/>
        <script src="js/libre.js"></script>
    </head>
    <body>
        <h2><p>Bienvenido a LIBRERIA FERMIN</p></h2>
        <form method="POST" action="login.php">
            <fieldset>
                <legend>ACCESO AL SISTEMA DE LIBRERIA DE FERMÍN</legend>
                <p id="tip" class="tip"></p>
                
            </fieldset>
        </form>
        
    </body>
</html>
