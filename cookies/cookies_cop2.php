<?php
// Establecer la cookie si se pasa un valor por URL
if (isset($_GET['set'])) {
    setcookie("idioma", $_GET['set'], time() + 3600, "/");
    echo "✅ Cookie enviada con valor: " . $_GET['set'] . "<br>";
    echo "🔄 Recarga la página para ver el valor actualizado en $_COOKIE.<br>";
}

// Mostrar el contenido completo de las cookies
echo "<h3>📦 Cookies recibidas:</h3>";
var_dump($_COOKIE);

// Eliminar la cookie si se solicita
if (isset($_GET['delete'])) {
    setcookie("idioma", "", time() - 3600, "/");
    echo "<br>🧹 Cookie 'idioma' eliminada.<br>";
}
?>
<hr>
<a href="?set=es">Establecer idioma: Español</a><br>
<a href="?set=fr">Establecer idioma: Francés</a><br>
<a href="?delete=true">Eliminar cookie</a><br>
<a href="?">Recargar sin acción</a>
