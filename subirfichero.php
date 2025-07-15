<html><body>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $dir_subida = 'C:\Users\Alumno Tarde\Desktop\0Elena';
            $fichero_subido = $dir_subida . basename($_FILES['fichero_usuario']['name']);
            //El archivo desde carpeta temporal a la ruta definida
            If (move_uploaded_file($_FILES['fichero_usuario']['tmp_name'], $fichero_subido)) {
                echo '<p>Se subió perfectamente.</p>';
            } else {
                echo '<p>¡Ups! Algo ha pasado.</p>';
            }
        }
        ?>
        <form method="post" enctype="multipart/form-data">
            <p><input type="file" name="fichero_usuario"></p>
            <p><input type="submit" value="Enviar"></p>
        </form>
    </body></html>
