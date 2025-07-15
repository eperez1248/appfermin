
<html>
    <body>
        <?php
        if (isset($_REQUEST['nombre'])) {
            //var_dump($_REQUEST);
            echo "El dato es " . $_REQUEST['nombre'];
        } else {
            ?>
            <form action="">
                <input type="text" name="nombre">
                <input type="submit">
            </form>
        <?php }; ?>
    </body>
</html>