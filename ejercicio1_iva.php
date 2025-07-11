<?php
$perfumeAcme = 100;
$perfumePepe = 10;
$maquillaje = 30;
$desodorante = 2;

$perfumeAcmeIva = $perfumeAcme*1.21;
$perfumePepeIva = $perfumePepe*1.21;
$maquillajeIva = $maquillaje*1.21;
$desodoranteIva = $desodorante*1.21;

echo '<h1>Lista de precios</h1>';
echo "<p>1.- bote de perfume de 50 ml marca acme: $perfumeAcme €./ Precio con iva: $perfumeAcmeIva €</p>";
echo "<p>2.- bote de perfume de 500ml Marca pepe: $perfumePepe €./ Precio con iva: $perfumePepeIva €</p>";
echo "<p>3.- tubos de maquillaje marca manchon: $maquillaje €./ Precio con iva: $maquillajeIva €</p>";
echo "<p>4.- botes de desodorante marca apesta: $desodorante €./ Precio con iva: $desodoranteIva €</p>";


?>