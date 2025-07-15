<?php

$zara = [
    123 => [
        'nombre' => 'Camisa a cuadros',
        'precio' => 29.95,
        'sexo' => 'Hombre'],
    234 => [
        'nombre' => 'Falda manga',
        'precio' => 19.95,
        'sexo' => 'Mujer'],
    345 => [
        'nombre' => 'Bolso minúsculo',
        'precio' => 50,
        'sexo' => 'Mujer']];

echo "<p>".var_dump($zara)."</p>";

echo "<p>".$zara[345]['nombre']."</p>";

foreach ($zara as $producto) {
    foreach ($producto as $elemento) {
        echo "<p>";
        echo "$elemento ";
         echo "</p>";
    }
}
