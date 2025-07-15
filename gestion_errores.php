 <html>
     <body><?php
     
            if ($_SERVER['REQUEST_METHOD'] == 'POST')//para asegurarme que los malos 
                                                    //No meten datos                      
            {                         
                function validar_requerido(string $texto): bool
                {return !(trim($texto) == '');}// se limpia la entrada de datos y si 
                                                // EL resultado es vacio, es que no hay nada            
                                              //escrito   
                function validar_entero(string $numero): bool
                {return filter_var($numero, FILTER_VALIDATE_INT);}
                                            //se comprueba que sea un  numero   
                                                //lo que el usuario teclea
                
                $errores = [];// array de mensajes de error
                
                $nombre = isset($_REQUEST['nombre']) ? $_REQUEST['nombre'] : null;
                            // si hay algo en la caja nombre, lo guardo en nombre
          
                $edad = isset($_REQUEST['edad']) ? $_REQUEST['edad'] : null;
                            //si hay algo en la caja edad , lo guardo en edad
                
                if (!validar_requerido($nombre)) {
                    $errores[] = "El campo Nombre es obligatorio";}
                    //valido nombre, si no es correcto, añado elemento al array
                if (!validar_entero($edad)) {
                    $errores[] = "El campo de Edad debe ser un número"; }
                        //valido edad, si no es correcto, añado elemento al array
                    
                if (!isset($errores)) {} }
                //si ola vcalidacion fue correcta
                // en este caso no se hace nada 
                 //pero se deja por si
                 // mas adelante es necesario
                ?>           
        <?php 
        //mostramos errores si los hay
        
        if (isset($errores)): ?>
        <ul class="errores">
            <?php foreach ($errores as $error): ?>
                <li><?= $error ?></li>
            <?php endforeach; ?> 
        </ul>
        <?php endif; ?>
        <form method="post">
            <p><input type="text" name="nombre" placeholder="Nombre"></p>
            <p> <input type="text" name="edad" placeholder="Edad"></p>
            <p><input type="submit" value="Enviar"></p>
        </form>
    </body>
 </html>