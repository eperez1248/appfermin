<?php
if (isset($_REQUEST['maquina-enigma'])) {
    echo "El dato es " . $_REQUEST['maquina-enigma'];
    echo "<p>" . $_SERVER['HTTP_HOST'] . "</p>";
    echo "<p>" . $_SERVER['SERVER_ADDR'] . "</p>";
    echo "<p>" . $_SERVER['SERVER_PORT'] . "</p>";

    echo "<p>" . $_SERVER['REQUEST_URI'] . "</p>";
    echo "<p>" . $_SERVER['REMOTE_ADDR'] . "</p>";
    echo "<p>" . $_SERVER['HTTP_USER_AGENT'] . "</p>";
} else {
    ?>        
    <form action="">
        <input type="hidden" name="maquina-enigma" value="149">
        <input type="submit">
    </form>
<?php }; ?> 

