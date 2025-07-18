<?php

// Caducará en 60 segundos
$caducidad = time() + 600;
//setcookie('idioma', 'es', $caducidad);
//echo $_COOKIE['idioma'];
// es
//setcookie('idioma', 'fr');
//echo $_COOKIE['idioma'];
// fr
//unset($_COOKIE['idioma']);
setcookie('color', 'green', $caducidad);
setcookie('etiqueta', 'h2', $caducidad);

$color = $_COOKIE['color'];
$etiqueta = $_COOKIE['etiqueta'];

echo '<body style="background-color: '.$color.'">
    <'.$etiqueta.'>title</'.$etiqueta.'>
</body>';



