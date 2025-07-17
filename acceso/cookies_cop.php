<?php
// Inicia la sesión si necesitas mantener estado
session_start();

// 1. Crear o actualizar cookie 'idioma'
if (isset($_GET['set'])) {
    $idioma = $_GET['set'];
    $caducidad = time() + 3600; // 1 hora
    setcookie('idioma', $idioma, $caducidad, "/");
    echo "Cookie 'idioma' establecida con valor: $idioma<br>";
    echo "🚀 Recarga la página para que $_COOKIE se actualice.<br>";
}

// 2. Mostrar la cookie si existe
if (isset($_COOKIE['idioma'])) {
    echo "✅ El idioma guardado es: " . $_COOKIE['idioma'] . "<br>";
} else {
    echo "❌ No hay cookie 'idioma' guardada.<br>";
}

// 3. Eliminar la cookie
if (isset($_GET['delete'])) {
    setcookie('idioma', '', time() - 3600, "/");
    echo "🧹 Cookie 'idioma' eliminada.<br>";
}
?>
<hr>
<!-- Interfaz sencilla -->
<a href="?set=es">Establecer idioma: Español</a><br>
<a href="?set=fr">Establecer idioma: Francés</a><br>
<a href="?delete=true">Eliminar cookie</a>